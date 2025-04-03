<?php


/**
 * this uploaded file
 * @param string $path
 * @param binary $request file
 * @return full path of uploaded
 */

use App\Models\MetaTagBanner;
use App\Models\Setting;
use App\Models\Word;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

if (!function_exists('uploadImage')) {
    function uploadImage($file, $path, $name = 'bg', $old_file = null)
    {
        // dd($old_file);
        $realName = $file->getClientOriginalName();
        $extention = $file->getClientOriginalExtension();
        $image_name = Str::slug($name) . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extention;
        $image_name =  $image_name;

        // $filename = $file->hashName();
        $file->move($path, $image_name);
        $fullpath = $path . $image_name;
        if ($old_file) {
            if (file_exists($old_file)) {
                unlink($old_file);
            }
        }
        return $fullpath;
    }
}


/**
 * this delete file
 * @param array or string $path
 */
if (!function_exists('deleteImage')) {
    function deleteImage($files)
    {
        if (is_array($files)) {
            foreach ($files as $value) {
                if (file_exists($value)) {
                    unlink($value);
                }
            }
        } else {
            if (file_exists($files)) {
                unlink($files);
            }
        }
    }
}




/**
 * get system value from db
 *
 * @return boolean
 */
if (!function_exists('isRtl')) {
    function isRtl()
    {
        return app()->getLocale() == 'ar' ? true : false;
    }
}

/**
 * response json
 */

if (!function_exists('responseJson')) {
    function responseJson($status, $message = "", $data = null)
    {
        return [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];
    }
}

/**
 * response json
 */
if (!function_exists('randColor')) {
    function randColor()
    {
        $colors = [
            "w3-red",
            "w3-pink",
            "w3-green",
            "w3-blue",
            "w3-purple",
            "w3-deep-purple",
            "w3-indigo",
            "w3-light-blue",
            "w3-cyan",
            "w3-aqua",
            "w3-teal",
            "w3-lime",
            "w3-light-green",
            "w3-orange",
            "w3-blue-gray",
            "w3-brown",
        ];

        return $colors[array_rand($colors)];
    }
}

/**
 * Checks if user agent is mobile or not
 *
 * @return boolean
 */
if (!function_exists('isMobile')) {
    function isMobile()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match("/iPhone|Android|iPad|iPod|webOS/", $_SERVER['HTTP_USER_AGENT']) || preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
            return true;
        } else {
            return false;
        }
    }
}



if (!function_exists('isMobile')) {
    function isMobile()
    {
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match("/iPhone|Android|iPad|iPod|webOS/", $_SERVER['HTTP_USER_AGENT']) || preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('getSettingValue')) {
    function getSettingValue($key)
    {
      return  Setting::getValue($key);

    }
}

if (!function_exists('getMeta')) {
    function getMeta($page)
    {
        // Get and Check Data
        $data = MetaTagBanner::where('page', $page)->first();
        // Check Get Data
        if (!$data) abort(404);
        // Return Data
        return $data;
    }
}
/**
 * @param $meta
 * @param null $image
 * @param null $title
 * @param string $type
 */
if (!function_exists('metaGenerate')) {
    function metaGenerate($meta, $title = null, $image = null, $type = "web page")
    {

        // Check Data Meta
        if ($meta->meta) {
            $meta = $meta->meta->toArray();
        }
        if (is_object($meta)) {
            $meta = $meta->toArray();
            if (array_key_exists('meta_keywords', $meta)) {
                $meta['keywords'] = $meta['meta_keywords'];
                $meta['description'] = $meta['meta_description'];
            }
        }

        SEOMeta::setTitle(getSettingValue('site_name_'.app()->getLocale()). ' | ' .$meta['title'] ?? '');
        SEOMeta::setDescription($meta['description'] ?? '');
        SEOMeta::addKeyword($meta['keywords']);
        SEOMeta::setCanonical(request()->fullUrl());

        OpenGraph::setTitle(getSettingValue('site_name_'.app()->getLocale()). ' | ' .$meta['title'] ?? '');
        OpenGraph::setDescription($meta['description'] ?? '');
        OpenGraph::setSiteName(getSettingValue('site_name_'.app()->getLocale()));
        OpenGraph::setUrl(request()->fullUrl());
        OpenGraph::addProperty('locale', app()->getLocale());
        OpenGraph::addProperty('type', $type);
        OpenGraph::addImage($image == null ? Setting::getValue('logo') : $image);

        JsonLd::setTitle(getSettingValue('site_name_'.app()->getLocale()) . ' | ' .$meta['title'] ?? '');
        JsonLd::setDescription($meta['description'] ?? '');
        JsonLd::setSite(getSettingValue('site_name_'.app()->getLocale()));
        JsonLd::setType($type);
        JsonLd::setUrl(request()->fullUrl());
        JsonLd::addImage($image == null ? Setting::getValue('logo') : $image);
    }
}


if (!function_exists('_trans')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function _trans($key = null, $replace = [], $locale = null)
    {
        // dd($key);
        Word::firstOrCreate(['key'=>$key]);
        $trans =Cache::get('trans_'.app()->getLocale());
        return $trans[$key] ?? $key ;
    }
}

if (!function_exists('__trans')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string|array|null
     */
    function __trans($key = null, $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return $key;
        }

        return _trans($key, $replace, $locale);
    }
}


if (!function_exists('__')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string|array|null
     */
    function __($key = null, $replace = [], $locale = null)
    {

        if (is_null($key)) {
            return $key;
        }

        return _trans($key, $replace, $locale);
    }
}



if (!function_exists('getLangs')) {

    function getLangs()
    {
        return DB::table('langs')->get();
    }
}
if (!function_exists('getSocialMedia')) {

    function getSocialMedia()
    {
        return   DB::table('social_media')->where('status', 1)->orderBy('sort')->get();
    }
}

