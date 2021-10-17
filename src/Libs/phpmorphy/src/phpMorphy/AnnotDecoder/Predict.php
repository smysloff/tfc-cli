<?php
/*
 *  This file is part of the Term Frequency Analyzer.
 *
 *  (c) Alexander Smyslov <kokoc.smyslov@yandex.ru>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

class phpMorphy_AnnotDecoder_Predict extends phpMorphy_AnnotDecoder_Common {
    protected function getUnpackString() {
//      return 'Voffset/vcplen/vplen/vflen/vcommon_ancode/vforms_count/vpacked_forms_count/vaffixes_size/vform_no/vpos_id/vfreq';
        return parent::getUnpackString() . '/vfreq';
    }

    protected function getUnpackBlockSize() {
        return parent::getUnpackBlockSize() + 2;
    }
}