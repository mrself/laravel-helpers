<?php namespace Mrself\LaravelHelpers;

use Illuminate\Support\ServiceProvider;

class HelperProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// dd('{' . app_path() . '/Helpers/*.php,' . __DIR__ . '/Helpers/*.php}');
		// dd(glob("{D:\oserver\OpenServer\domains\yaform\app\**\*.php, d}", GLOB_BRACE));
		// dd(array_merge(glob(app_path(). '/Helpers/*.php'), glob(__DIR__. '/Helpers/*.php')));
		foreach (array_merge(glob(app_path(). '/Helpers/*.php'), glob(__DIR__. '/Helpers/*.php')) as $filename) {
			require_once($filename);
		}
	}

}
