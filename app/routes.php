<?php

/**
 * -----------------------------------------------------------------------------
 * Site
 * -----------------------------------------------------------------------------
 * 
 * A cms-hez tarozó route-ok. 
 * 
 */
/* Route::get('/',function(){   
  return 'Cover page';
  }); */

if (Config::get('app.debug')) {
    Route::get('/phpinfo', function() {
        echo phpinfo();
    });
}

Route::get('/',function(){
   return View::make('cover'); 
});

//Route::get('/', ['uses' => 'Site\HomeController@index', 'as' => 'fooldal']);


/**
 * -----------------------------------------------------------------------------
 * IK statikus oldalak
 * -----------------------------------------------------------------------------
 * 
 * Tanárosdi oldalamnak a statikus lapjai.
 * 
 */

Route::group(array('domain' => '{sub}.divide.hu'), function()
{

    Route::get('/', function($sub)
    {
        
    });

});



/**
 * -----------------------------------------------------------------------------
 * Site menu
 * -----------------------------------------------------------------------------
 * 
 * A cms-hez tarozó menu-k. 
 * 
 */
/*if (!Request::is('admin') && !Request::is('admin/*')) {

    Menu::make('mainMenu', function($menu) {

        $menu->add('Főoldal', array('route' => 'fooldal'));

        $menu->add('Események', array('route' => 'esemenyek.index'));

        $menu->add('Galériák', array('route' => 'galeriak.index'));
        
        $menu->add('Dokumentumok', array('route' => 'dokumentumok.index'));

        try {
            \Divide\CMS\Page::getPagesForMenu($menu, 0);

            foreach ($menu->all() as $item) {
                if ($item->hasChildren()) {
                    $item->append('<i class="fa fa-bars"></i>');
                }
            }
        } catch (\Exception $e) {
            
        }
    });
}*/


/**
 * -----------------------------------------------------------------------------
 * Admin
 * -----------------------------------------------------------------------------
 * 
 * Az adminisztrációs felülethez tarozó route-ok. 
 * 
 */
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function() {

    Route::get('bejelentkezes', ['uses' => 'UsersController@getLogin', 'as' => 'admin.bejelentkezes', 'before' => 'userLoggedIn']);

    Route::post('bejelentkezes', ['uses' => 'UsersController@postLogin', 'as' => 'admin.bejelentkezes']);

    Route::get('kijelentkezes', ['uses' => 'UsersController@getLogout', 'as' => 'admin.kijelentkezes']);
});

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'before' => 'userNotLoggedIn|inGroup:Admin'), function() {

    /**
     * Általános beállításokhoz tartozó route-ok.
     */
    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'admin.vezerlopult']);

    Route::resource('oldal', 'PageController');

    Route::resource('hir', 'ArticleController');

    Route::resource('esemeny', 'EventController');
    
    Route::resource('dokumentum', 'DocumentController');

    Route::resource('galeria', 'GalleryController');

    Route::get('galeria/kep/{id}/upload', ['uses' => 'GalleryController@getPicture', 'as' => 'admin.galeria.kep.upload'])->where('id', '[0-9]+');

    Route::post('galeria/kep/save', ['uses' => 'GalleryController@postPicture', 'as' => 'admin.galeria.kep.save']);

    Route::post('galeria/kep/{id}/delete', ['uses' => 'GalleryController@deletePicture', 'as' => 'admin.galeria.kep.delete'])->where('id', '[0-9]+');

    /**
     * Felhasználók kezeléséhez tartozó route-ok.
     */
    Route::group(['prefix' => 'felhasznalok'], function() {
        Route::resource('felhasznalo', 'UsersController');

        Route::post('felhasznalo/{id}/change', ['uses' => 'UsersController@postProfile', 'as' => 'admin.felhasznalok.felhasznalo.change']);

        Route::post('felhasznalo/{id}/password', ['uses' => 'UsersController@postPassword', 'as' => 'admin.felhasznalok.felhasznalo.password']);

        Route::post('felhasznalo/{id}/picture', ['uses' => 'UsersController@postProfilePicture', 'as' => 'admin.felhasznalok.felhasznalo.picture']);

        Route::get('felhasznalo/{id}/picture/delete', ['uses' => 'UsersController@deleteProfilePicture', 'as' => 'admin.felhasznalok.felhasznalo.delete.picture']);

        Route::resource('felhasznalo-csoport', 'GroupsController');
    });
});
