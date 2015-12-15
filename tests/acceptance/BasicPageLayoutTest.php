<?php

class BasicPageLayoutTest extends \PHPUnit_Framework_TestCase
{
    protected $webDriver;
    protected $url = 'http://peer.local';

    protected function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->webDriver = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', $capabilities);
    }

    protected function tearDown()
    {
        $this->webDriver->quit();
    }

    // tests
    public function testMe()
    {
    }

    public function testTitleContainsPeerFeedback()
    {
        $this->webDriver->get($this->url);
        $this->assertContains('Peer Feedback', $this->webDriver->getTitle());
    }

    public function testPageHasLogo()
    {
        $this->webDriver->get($this->url);
        try {
            $this->webDriver->findElement(
                WebDriverBy::cssSelector('.uk-navbar-brand > img:nth-child(1)')
            );
        } catch (NFacebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('Kmk logo not found');
        }
    }
    
    public function testLogoHeightIs80px()
    {
        $this->webDriver->get($this->url);
        try {
            $gambar = $this->webDriver->findElement(
                WebDriverBy::cssSelector('.uk-navbar-brand > img:nth-child(1)')
            );
            $this->assertEquals('80px', $gambar->getCSSValue('height'));
        } catch (NFacebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('Kmk logo not found');
        }
    }

    public function testLogoWidhtIs80px()
    {
        $this->webDriver->get($this->url);
        try {
            $gambar = $this->webDriver->findElement(
                WebDriverBy::cssSelector('.uk-navbar-brand > img:nth-child(1)')
            );
            $this->assertEquals('80px', $gambar->getCSSValue('width'));
        } catch (Facebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('Kmk logo not found');
        }
    }

    public function testNavbarMenuExists()
    {
        $this->webDriver->get($this->url);
        try {
            $this->webDriver->findElement(
                WebDriverBy::cssSelector('.menu-link')
            );
        } catch (Facebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('Navbar menu not found');
        }
    }

    public function testNavbarMenuIsBlack()
    {
        $this->webDriver->get($this->url);
        try {
            $menu = $this->webDriver->findElement(
                WebDriverBy::cssSelector('.menu-link')
            );
            $this->assertEquals('#444', $menu->getCSSValue('color'));
        } catch (Facebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('Navbar menu not found');
        }
    }

    public function testNavbarMenuIsOrangeWhenHovered()
    {
        $this->webDriver->get($this->url);
        try {
            $menu = $this->webDriver->findElement(
                WebDriverBy::cssSelector('.menu-link')
            );
            $this->webDriver->getMouse()->mouseMove($menu->getCoordinates());
            $this->assertEquals('#FFd600', $menu->getCSSValue('color'));
        } catch (Facebook\WebDriver\Exception\NoSuchElementException $e) {
            $this->fail('Navbar menu not found');
        }
    }

}
