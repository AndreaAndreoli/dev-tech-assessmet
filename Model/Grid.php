<?php

namespace HN\HeadCount\Model;

use HN\HeadCount\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    const CACHE_TAG = 'hn_headcounts';

    protected $_cacheTag = 'hn_headcounts';

    protected $_eventPrefix = 'hn_headcounts';

    protected function _construct()
    {
        $this->_init('HN\HeadCount\Model\ResourceModel\Grid');
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    public function getCode()
    {
        return $this->getData(self::CODE);
    }

    public function setCode($code)
    {
        return $this->setData(self::CODE, $code);
    }
    
    public function getName()
    {
        return $this->setName(self::NAME);
    }

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function getYear2004()
    {
        return $this->getData(self::YEAR2004);
    }

    public function setYear2004($year2004)
    {
        return $this->setData(self::YEAR2004, $year2004);
    }

    public function getYear2005()
    {
        return $this->getData(self::YEAR2005);
    }

    public function setYear2005($year2005)
    {
        return $this->setData(self::YEAR2005, $year2005);
    }

    public function getYear2006()
    {
        return $this->getData(self::YEAR2006);
    }

    public function setYear2006($year2006)
    {
        return $this->setData(self::YEAR2006, $year2006);
    }

    public function getYear2007()
    {
        return $this->getData(self::YEAR2007);
    }

    public function setYear2007($year2007)
    {
        return $this->setData(self::YEAR2007, $year2007);
    }

    public function getYear2008()
    {
        return $this->getData(self::YEAR2008);
    }

    public function setYear2008($year2008)
    {
        return $this->setData(self::YEAR2008, $year2008);
    }

    public function getYear2009()
    {
        return $this->getData(self::YEAR2009);
    }

    public function setYear2009($year2009)
    {
        return $this->setData(self::YEAR2009, $year2009);
    }

    public function getYear2010()
    {
        return $this->getData(self::YEAR2010);
    }

    public function setYear2010($year2010)
    {
        return $this->setData(self::YEAR2010, $year2010);
    }

    public function getYear2011()
    {
        return $this->getData(self::YEAR2011);
    }

    public function setYear2011($year2011)
    {
        return $this->setData(self::YEAR2011, $year2011);
    }

    public function getYear2012()
    {
        return $this->getData(self::YEAR2012);
    }

    public function setYear2012($year2012)
    {
        return $this->setData(self::YEAR2012, $year2012);
    }

    public function getYear2013()
    {
        return $this->getData(self::YEAR2013);
    }

    public function setYear2013($year2013)
    {
        return $this->setData(self::YEAR2013, $year2013);
    }

    public function getYear2014()
    {
        return $this->getData(self::YEAR2014);
    }

    public function setYear2014($year2014)
    {
        return $this->setData(self::YEAR2004, $year2014);
    }

    public function getYear2015()
    {
        return $this->getData(self::YEAR2015);
    }

    public function setYear2015($year2015)
    {
        return $this->setData(self::YEAR2015, $year2015);
    }

    public function getYear2016()
    {
        return $this->getData(self::YEAR2016);
    }

    public function setYear2016($year2016)
    {
        return $this->setData(self::YEAR2016, $year2016);
    }

    public function getYear2017()
    {
        return $this->getData(self::YEAR2017);
    }

    public function setYear2017($year2017)
    {
        return $this->setData(self::YEAR2017, $year2017);
    }

    public function getYear2018()
    {
        return $this->getData(self::YEAR2018);
    }

    public function setYear2018($year2018)
    {
        return $this->setData(self::YEAR2018, $year2018);
    }
}
