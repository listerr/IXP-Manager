<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\TrafficDaily
 */
class TrafficDaily
{
    /**
     * @var \DateTime $day
     */
    private $day;

    /**
     * @var string $category
     */
    private $category;

    /**
     * @var integer $day_avg_in
     */
    private $day_avg_in;

    /**
     * @var integer $day_avg_out
     */
    private $day_avg_out;

    /**
     * @var integer $day_max_in
     */
    private $day_max_in;

    /**
     * @var integer $day_max_out
     */
    private $day_max_out;

    /**
     * @var integer $day_tot_in
     */
    private $day_tot_in;

    /**
     * @var integer $day_tot_out
     */
    private $day_tot_out;

    /**
     * @var integer $week_avg_in
     */
    private $week_avg_in;

    /**
     * @var integer $week_avg_out
     */
    private $week_avg_out;

    /**
     * @var integer $week_max_in
     */
    private $week_max_in;

    /**
     * @var integer $week_max_out
     */
    private $week_max_out;

    /**
     * @var integer $week_tot_in
     */
    private $week_tot_in;

    /**
     * @var integer $week_tot_out
     */
    private $week_tot_out;

    /**
     * @var integer $month_avg_in
     */
    private $month_avg_in;

    /**
     * @var integer $month_avg_out
     */
    private $month_avg_out;

    /**
     * @var integer $month_max_in
     */
    private $month_max_in;

    /**
     * @var integer $month_max_out
     */
    private $month_max_out;

    /**
     * @var integer $month_tot_in
     */
    private $month_tot_in;

    /**
     * @var integer $month_tot_out
     */
    private $month_tot_out;

    /**
     * @var integer $year_avg_in
     */
    private $year_avg_in;

    /**
     * @var integer $year_avg_out
     */
    private $year_avg_out;

    /**
     * @var integer $year_max_in
     */
    private $year_max_in;

    /**
     * @var integer $year_max_out
     */
    private $year_max_out;

    /**
     * @var integer $year_tot_in
     */
    private $year_tot_in;

    /**
     * @var integer $year_tot_out
     */
    private $year_tot_out;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Entities\Customer
     */
    private $Customer;


    /**
     * Set day
     *
     * @param \DateTime $day
     * @return TrafficDaily
     */
    public function setDay($day)
    {
        $this->day = $day;
    
        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return TrafficDaily
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set day_avg_in
     *
     * @param integer $dayAvgIn
     * @return TrafficDaily
     */
    public function setDayAvgIn($dayAvgIn)
    {
        $this->day_avg_in = $dayAvgIn;
    
        return $this;
    }

    /**
     * Get day_avg_in
     *
     * @return integer 
     */
    public function getDayAvgIn()
    {
        return $this->day_avg_in;
    }

    /**
     * Set day_avg_out
     *
     * @param integer $dayAvgOut
     * @return TrafficDaily
     */
    public function setDayAvgOut($dayAvgOut)
    {
        $this->day_avg_out = $dayAvgOut;
    
        return $this;
    }

    /**
     * Get day_avg_out
     *
     * @return integer 
     */
    public function getDayAvgOut()
    {
        return $this->day_avg_out;
    }

    /**
     * Set day_max_in
     *
     * @param integer $dayMaxIn
     * @return TrafficDaily
     */
    public function setDayMaxIn($dayMaxIn)
    {
        $this->day_max_in = $dayMaxIn;
    
        return $this;
    }

    /**
     * Get day_max_in
     *
     * @return integer 
     */
    public function getDayMaxIn()
    {
        return $this->day_max_in;
    }

    /**
     * Set day_max_out
     *
     * @param integer $dayMaxOut
     * @return TrafficDaily
     */
    public function setDayMaxOut($dayMaxOut)
    {
        $this->day_max_out = $dayMaxOut;
    
        return $this;
    }

    /**
     * Get day_max_out
     *
     * @return integer 
     */
    public function getDayMaxOut()
    {
        return $this->day_max_out;
    }

    /**
     * Set day_tot_in
     *
     * @param integer $dayTotIn
     * @return TrafficDaily
     */
    public function setDayTotIn($dayTotIn)
    {
        $this->day_tot_in = $dayTotIn;
    
        return $this;
    }

    /**
     * Get day_tot_in
     *
     * @return integer 
     */
    public function getDayTotIn()
    {
        return $this->day_tot_in;
    }

    /**
     * Set day_tot_out
     *
     * @param integer $dayTotOut
     * @return TrafficDaily
     */
    public function setDayTotOut($dayTotOut)
    {
        $this->day_tot_out = $dayTotOut;
    
        return $this;
    }

    /**
     * Get day_tot_out
     *
     * @return integer 
     */
    public function getDayTotOut()
    {
        return $this->day_tot_out;
    }

    /**
     * Set week_avg_in
     *
     * @param integer $weekAvgIn
     * @return TrafficDaily
     */
    public function setWeekAvgIn($weekAvgIn)
    {
        $this->week_avg_in = $weekAvgIn;
    
        return $this;
    }

    /**
     * Get week_avg_in
     *
     * @return integer 
     */
    public function getWeekAvgIn()
    {
        return $this->week_avg_in;
    }

    /**
     * Set week_avg_out
     *
     * @param integer $weekAvgOut
     * @return TrafficDaily
     */
    public function setWeekAvgOut($weekAvgOut)
    {
        $this->week_avg_out = $weekAvgOut;
    
        return $this;
    }

    /**
     * Get week_avg_out
     *
     * @return integer 
     */
    public function getWeekAvgOut()
    {
        return $this->week_avg_out;
    }

    /**
     * Set week_max_in
     *
     * @param integer $weekMaxIn
     * @return TrafficDaily
     */
    public function setWeekMaxIn($weekMaxIn)
    {
        $this->week_max_in = $weekMaxIn;
    
        return $this;
    }

    /**
     * Get week_max_in
     *
     * @return integer 
     */
    public function getWeekMaxIn()
    {
        return $this->week_max_in;
    }

    /**
     * Set week_max_out
     *
     * @param integer $weekMaxOut
     * @return TrafficDaily
     */
    public function setWeekMaxOut($weekMaxOut)
    {
        $this->week_max_out = $weekMaxOut;
    
        return $this;
    }

    /**
     * Get week_max_out
     *
     * @return integer 
     */
    public function getWeekMaxOut()
    {
        return $this->week_max_out;
    }

    /**
     * Set week_tot_in
     *
     * @param integer $weekTotIn
     * @return TrafficDaily
     */
    public function setWeekTotIn($weekTotIn)
    {
        $this->week_tot_in = $weekTotIn;
    
        return $this;
    }

    /**
     * Get week_tot_in
     *
     * @return integer 
     */
    public function getWeekTotIn()
    {
        return $this->week_tot_in;
    }

    /**
     * Set week_tot_out
     *
     * @param integer $weekTotOut
     * @return TrafficDaily
     */
    public function setWeekTotOut($weekTotOut)
    {
        $this->week_tot_out = $weekTotOut;
    
        return $this;
    }

    /**
     * Get week_tot_out
     *
     * @return integer 
     */
    public function getWeekTotOut()
    {
        return $this->week_tot_out;
    }

    /**
     * Set month_avg_in
     *
     * @param integer $monthAvgIn
     * @return TrafficDaily
     */
    public function setMonthAvgIn($monthAvgIn)
    {
        $this->month_avg_in = $monthAvgIn;
    
        return $this;
    }

    /**
     * Get month_avg_in
     *
     * @return integer 
     */
    public function getMonthAvgIn()
    {
        return $this->month_avg_in;
    }

    /**
     * Set month_avg_out
     *
     * @param integer $monthAvgOut
     * @return TrafficDaily
     */
    public function setMonthAvgOut($monthAvgOut)
    {
        $this->month_avg_out = $monthAvgOut;
    
        return $this;
    }

    /**
     * Get month_avg_out
     *
     * @return integer 
     */
    public function getMonthAvgOut()
    {
        return $this->month_avg_out;
    }

    /**
     * Set month_max_in
     *
     * @param integer $monthMaxIn
     * @return TrafficDaily
     */
    public function setMonthMaxIn($monthMaxIn)
    {
        $this->month_max_in = $monthMaxIn;
    
        return $this;
    }

    /**
     * Get month_max_in
     *
     * @return integer 
     */
    public function getMonthMaxIn()
    {
        return $this->month_max_in;
    }

    /**
     * Set month_max_out
     *
     * @param integer $monthMaxOut
     * @return TrafficDaily
     */
    public function setMonthMaxOut($monthMaxOut)
    {
        $this->month_max_out = $monthMaxOut;
    
        return $this;
    }

    /**
     * Get month_max_out
     *
     * @return integer 
     */
    public function getMonthMaxOut()
    {
        return $this->month_max_out;
    }

    /**
     * Set month_tot_in
     *
     * @param integer $monthTotIn
     * @return TrafficDaily
     */
    public function setMonthTotIn($monthTotIn)
    {
        $this->month_tot_in = $monthTotIn;
    
        return $this;
    }

    /**
     * Get month_tot_in
     *
     * @return integer 
     */
    public function getMonthTotIn()
    {
        return $this->month_tot_in;
    }

    /**
     * Set month_tot_out
     *
     * @param integer $monthTotOut
     * @return TrafficDaily
     */
    public function setMonthTotOut($monthTotOut)
    {
        $this->month_tot_out = $monthTotOut;
    
        return $this;
    }

    /**
     * Get month_tot_out
     *
     * @return integer 
     */
    public function getMonthTotOut()
    {
        return $this->month_tot_out;
    }

    /**
     * Set year_avg_in
     *
     * @param integer $yearAvgIn
     * @return TrafficDaily
     */
    public function setYearAvgIn($yearAvgIn)
    {
        $this->year_avg_in = $yearAvgIn;
    
        return $this;
    }

    /**
     * Get year_avg_in
     *
     * @return integer 
     */
    public function getYearAvgIn()
    {
        return $this->year_avg_in;
    }

    /**
     * Set year_avg_out
     *
     * @param integer $yearAvgOut
     * @return TrafficDaily
     */
    public function setYearAvgOut($yearAvgOut)
    {
        $this->year_avg_out = $yearAvgOut;
    
        return $this;
    }

    /**
     * Get year_avg_out
     *
     * @return integer 
     */
    public function getYearAvgOut()
    {
        return $this->year_avg_out;
    }

    /**
     * Set year_max_in
     *
     * @param integer $yearMaxIn
     * @return TrafficDaily
     */
    public function setYearMaxIn($yearMaxIn)
    {
        $this->year_max_in = $yearMaxIn;
    
        return $this;
    }

    /**
     * Get year_max_in
     *
     * @return integer 
     */
    public function getYearMaxIn()
    {
        return $this->year_max_in;
    }

    /**
     * Set year_max_out
     *
     * @param integer $yearMaxOut
     * @return TrafficDaily
     */
    public function setYearMaxOut($yearMaxOut)
    {
        $this->year_max_out = $yearMaxOut;
    
        return $this;
    }

    /**
     * Get year_max_out
     *
     * @return integer 
     */
    public function getYearMaxOut()
    {
        return $this->year_max_out;
    }

    /**
     * Set year_tot_in
     *
     * @param integer $yearTotIn
     * @return TrafficDaily
     */
    public function setYearTotIn($yearTotIn)
    {
        $this->year_tot_in = $yearTotIn;
    
        return $this;
    }

    /**
     * Get year_tot_in
     *
     * @return integer 
     */
    public function getYearTotIn()
    {
        return $this->year_tot_in;
    }

    /**
     * Set year_tot_out
     *
     * @param integer $yearTotOut
     * @return TrafficDaily
     */
    public function setYearTotOut($yearTotOut)
    {
        $this->year_tot_out = $yearTotOut;
    
        return $this;
    }

    /**
     * Get year_tot_out
     *
     * @return integer 
     */
    public function getYearTotOut()
    {
        return $this->year_tot_out;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Customer
     *
     * @param Entities\Customer $customer
     * @return TrafficDaily
     */
    public function setCustomer(\Entities\Customer $customer = null)
    {
        $this->Customer = $customer;
    
        return $this;
    }

    /**
     * Get Customer
     *
     * @return Entities\Customer 
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
}