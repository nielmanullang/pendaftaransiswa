<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 *
 * @package App
 * @property string $title
*/
class Article extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'image'];

    public static function boot()
    {
        parent::boot();

        Topic::observe(new \App\Observers\UserActionsObserver);
    }

}
