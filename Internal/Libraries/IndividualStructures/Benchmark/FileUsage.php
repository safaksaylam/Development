<?php namespace ZN\IndividualStructures\Benchmark;

class FileUsage implements FileUsageInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Used Files
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $result
    // @return numeric
    //
    //--------------------------------------------------------------------------------------------------------
    public static function list(string $result = NULL) : array
    {
        if( empty($result) )
        {
            return get_required_files();
        }

        $resend  = $result."_end";
        $restart = $result."_start";

        if( ! isset(Properties::$usedtests[$restart]) )
        {
            throw new BenchmarkException('[Benchmark::usedFiles(\''.$result.'\')] -> Parameter is not a valid test start!');
        }

        if( ! isset(Properties::$usedtests[$resend]) )
        {
            throw new BenchmarkException('[Benchmark::usedFiles(\''.$result.'\')] -> Parameter is not a valid test end!');
        }

        return array_diff(Properties::$usedtests[$resend], Properties::$usedtests[$restart]);
    }

    //--------------------------------------------------------------------------------------------------------
    // Used File Count
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $result
    // @return numeric
    //
    //--------------------------------------------------------------------------------------------------------
    public static function count(string $result = NULL) : int
    {
        if( empty($result) )
        {
            return count(get_required_files());
        }

        $resend  = $result."_end";
        $restart = $result."_start";

        if( ! isset(Properties::$usedtests[$restart]) )
        {
            throw new BenchmarkException('[Benchmark::usedFileCount(\''.$result.'\')] -> Parameter is not a valid test start!');
        }

        if( ! isset(Properties::$usedtests[$resend]) )
        {
            throw new BenchmarkException('[Benchmark::usedFileCount(\''.$result.'\')] -> Parameter is not a valid test end!');
        }

        return count(Properties::$usedtests[$resend]) - count(Properties::$usedtests[$restart]);
    }
}
