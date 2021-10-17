<?php
/*
 *  This file is part of the Term Frequency Analyzer.
 *
 *  (c) Alexander Smyslov <kokoc.smyslov@yandex.ru>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */


class phpMorphy_Dict_Source_NormalizedAncodes_Flexia extends phpMorphy_Dict_FlexiaDecorator {
    protected
        $manager;

    function __construct(phpMorphy_Dict_Source_NormalizedAncodes_AncodesManager $manager, phpMorphy_Dict_Flexia $inner) {
        parent::__construct($inner);
        $this->manager = $manager;
    }

    function getAncodeId() { return $this->manager->resolveAncode(parent::getAncodeId()); }
}