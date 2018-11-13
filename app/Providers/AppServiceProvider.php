<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Auth;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;
use App\Models\Partners;
use App\Models\Support;
use DateTime;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share([
            $now = new DateTime(),
            'sliders' => Slider::where('status','enable')->get(),
            'categorys' => Category::Where('parent_id','parent')->get(),
            'best_seller' => Product::Where('is_best_seller','enable')->get(),
            'new_products' => Product::Where('is_new_product','enable')->paginate(10),
            'promotion' => Product::Where('is_promotion','enable')->get(),
            'special_products' => Product::Where('special_product','enable')->get(),
            'news' => News::Where('category_id','35')->paginate(10),
            'news_1' => News::Where('category_id','32')->paginate(10),
            'supports' => Support::Where('status','enable')->Where('type','technical')->paginate(10),
            'sp' => Support::Where('status','enable')->Where('type','business')->paginate(10),
            'partners' => Partners::Where('status','enable')->get(),
    ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
