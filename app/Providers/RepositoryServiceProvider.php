<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Faq;
use App\Models\News;
use App\Models\PhotoGallery;
use App\Models\Project;
use App\Models\Tag;
use App\Models\Video;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Setting;
use App\Models\Footer;
use App\Repositories\Article\ArticleRepository;
use App\Repositories\Article\CacheDecorator as ArticleCacheDecorator;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CacheDecorator as CategoryCacheDecorator;
use App\Repositories\Page\PageRepository;
use App\Repositories\Page\CacheDecorator as PageCacheDecorator;
use App\Repositories\Faq\FaqRepository;
use App\Repositories\Faq\CacheDecorator as FaqCacheDecorator;
use App\Repositories\News\NewsRepository;
use App\Repositories\News\CacheDecorator as NewsCacheDecorator;
use App\Repositories\PhotoGallery\PhotoGalleryRepository;
use App\Repositories\PhotoGallery\CacheDecorator as PhotoGalleryCacheDecorator;
use App\Repositories\Project\ProjectRepository;
use App\Repositories\Project\CacheDecorator as ProjectCacheDecorator;
use App\Repositories\Tag\TagRepository;
use App\Repositories\Tag\CacheDecorator as TagCacheDecorator;
use App\Repositories\Video\VideoRepository;
use App\Repositories\Video\CacheDecorator as VideoCacheDecorator;
use App\Repositories\Menu\MenuRepository;
use App\Repositories\Menu\CacheDecorator as MenuCacheDecorator;
use App\Repositories\Slider\SliderRepository;
use App\Repositories\Slider\CacheDecorator as SliderCacheDecorator;
use App\Repositories\Setting\SettingRepository;
use App\Repositories\Setting\CacheDecorator as SettingCacheDecorator;
use App\Repositories\Footer\FooterRepository;
use App\Repositories\Footer\CacheDecorator as FooterCacheDecorator;
use App\Services\Cache\AppCache;

/**
 * Class RepositoryServiceProvider.
 *
 * @author Sefa Karagöz <karagozsefa@gmail.com>
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $app = $this->app;

        //dd($app['config']->get('fully.cache'));

        // article
        $app->bind('App\Repositories\Article\ArticleInterface', function ($app) {

            $article = new ArticleRepository(
                new Article()
            );

            //dd($app['config']->get('is_admin', false));

            

            return $article;
        });

        // category
        $app->bind('App\Repositories\Category\CategoryInterface', function ($app) {

            $category = new CategoryRepository(
                new Category()
            );

            

            return $category;
        });

        // page
        $app->bind('App\Repositories\Page\PageInterface', function ($app) {

            $page = new PageRepository(
                new Page()
            );

           
            return $page;
        });

        // faq
        $app->bind('App\Repositories\Faq\FaqInterface', function ($app) {

            $faq = new FaqRepository(
                new Faq()
            );

           
            return $faq;
        });

        // news
        $app->bind('App\Repositories\News\NewsInterface', function ($app) {

            $news = new NewsRepository(
                new News()
            );


            return $news;
        });

        // photo gallery
        $app->bind('App\Repositories\PhotoGallery\PhotoGalleryInterface', function ($app) {

            $photoGallery = new PhotoGalleryRepository(
                new PhotoGallery()
            );

            return $photoGallery;
        });

        // project
        $app->bind('App\Repositories\Project\ProjectInterface', function ($app) {

            $project = new ProjectRepository(
                new Project()
            );

          

            return $project;
        });

        // tag
        $app->bind('App\Repositories\Tag\TagInterface', function ($app) {

            $tag = new TagRepository(
                new Tag()
            );

          

            return $tag;
        });

        // video
        $app->bind('App\Repositories\Video\VideoInterface', function ($app) {

            $video = new VideoRepository(
                new Video()
            );

            

            return $video;
        });

        // menu
        $app->bind('App\Repositories\Menu\MenuInterface', function ($app) {

            $menu = new MenuRepository(
                new Menu()
            );

            

            return $menu;
        });

        // slider
        $app->bind('App\Repositories\Slider\SliderInterface', function ($app) {

            $slider = new SliderRepository(
                new Slider()
            );


            return $slider;
        });

        // setting
        $app->bind('App\Repositories\Setting\SettingInterface', function ($app) {

            $setting = new SettingRepository(
                new Setting()
            );

           
            return $setting;
        });

    // footer
        $app->bind('App\Repositories\Footer\FooterInterface', function ($app) {

            $footer = new FooterRepository(
                new Footer()
            );

            return $footer;
        });
    }
}
