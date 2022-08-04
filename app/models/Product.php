<?

namespace app\models;


class Product extends AppModel
{
    public function setRecentlyViwed($id)
    {
        $recentlyViewd = $this->getAllRecentlyViwed();
        if (!$recentlyViewd) {
            setcookie('recentlyViewd', $id, time() + 3600 * 24, "/");
        } else {
            $recentlyViewd = explode(',', $recentlyViewd);
            if (!in_array($id, $recentlyViewd)) {
                $recentlyViewd[] = $id;
                $recentlyViewd = implode(',', $recentlyViewd);
                setcookie('recentlyViewd', $recentlyViewd, time() + 3600 * 24, "/");
            }
        }
    }
    public function getRecentlyViwed()
    {
        if (!empty($_COOKIE['recentlyViewd'])) {
            $recentlyViewd = $_COOKIE['recentlyViewd'];
            $recentlyViewd = explode(',', $recentlyViewd);
            return array_slice($recentlyViewd, -3);
        }
        return false;
    }
    public function getAllRecentlyViwed()
    {
        if (!empty($_COOKIE['recentlyViewd'])) {
            return $_COOKIE['recentlyViewd'];
        }
        return false;
    }
}
