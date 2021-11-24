<?php
use App\Models\User;


Route::get('StartSitemap', function() {
    // create new sitemap object
    $sitemap = App::make('sitemap');

    // get all products from db (or wherever you store them)
    $users = DB::table('users')->orderBy('created_at', 'desc')->get();

    // counters
    $counter = 0;
    $sitemapCounter = 0;

include(app_path().'\Providers\system\start.php');

foreach ($langs as $lang){

//--------------------------users
    foreach ($users as $user) {
        if ($counter == env('SITEMAP_MAX')) {
            // generate new sitemap file
            $sitemap->store('xml', 'sitemap-' . $sitemapCounter);
            // add the file to the sitemaps array
            $sitemap->addSitemap(secure_url('sitemap-' . $sitemapCounter . '.xml'));
            // reset items array (clear memory)
            $sitemap->model->resetItems();
            // reset the counter
            $counter = 0;
            // count generated sitemap
            $sitemapCounter++;
        }

          $sitemap->add(URL::to('user/'.$user->id.'/'.$lang->language.''), ''.$user->created_at.'',
            ''.env('SITEMAP_priority').'',
            ''.env('SITEMAP_changefreq').'');

        $counter++;
    }
//--------------------------end users


//--------------------------route
    foreach ($get_routes as $route) {
        if ($counter == env('SITEMAP_MAX')) {
            // generate new sitemap file
            $sitemap->store('xml', 'sitemap-' . $sitemapCounter);
            // add the file to the sitemaps array
            $sitemap->addSitemap(secure_url('sitemap-' . $sitemapCounter . '.xml'));
            // reset items array (clear memory)
            $sitemap->model->resetItems();
            // reset the counter
            $counter = 0;
            // count generated sitemap
            $sitemapCounter++;
        }

        if($route->for=="User"){
            $sitemap->add(URL::to('/'.$route->name.'/index/'.$lang->language.''), ''.$route->created_at.'',
            ''.env('SITEMAP_priority').'',
            ''.env('SITEMAP_changefreq').'');
        }

        $counter++;
    }
//--------------------------end route


// codes



} // langs

    // you need to check for unused items
    if (!empty($sitemap->model->getItems())) {
        // generate sitemap with last items
        $sitemap->store('xml', 'sitemap-' . $sitemapCounter);
        // add sitemap to sitemaps array
        $sitemap->addSitemap(secure_url('sitemap-' . $sitemapCounter . '.xml'));
        // reset items array
        $sitemap->model->resetItems();
    }

    // generate new sitemapindex that will contain all generated sitemaps above
    $sitemap->store('sitemapindex', 'sitemap');

    return redirect('/sitemap.xml');

});