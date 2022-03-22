<?php

namespace Puppyter\Tracker\repositories;

class Track
{
    public static function collect($offerId, $clientIp=null)
    {
        return $clientIp == null
            ? Watch::collect($offerId)
            : WatchIp::collect($offerId, $clientIp);
    }
    
    public static function clear($offerId, bool $byIp=false)
    {
        return $byIp == false
            ? Watch::clear($offerId)
            : WatchIp::clear($offerId);
    }    
    
    public static function delete($offerId, bool $byIp=false)
    {
        return $byIp == false
            ? Watch::delete($offerId)
            : WatchIp::delete($offerId);
    }
    
    public static function get(bool $byIp=false)
    {
        return $byIp == false
            ? Watch::get()
            : WatchIp::get();
    }
    
    public static function getForId($offerId, bool $byIp=false)
    {
        return $byIp == false
            ? Watch::getForId($offerId)
            : WatchIp::getForId($offerId);
    }
    
}