namespace MyCompany\Template;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Template', function () {
            return new Template();
        });
    }
}
