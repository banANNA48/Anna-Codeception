<?php

class TestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('https://archant.co.nz/'); 
        //$I->wait(5);
        //$I->see('We aim to be champions of creativity, with a role to source new products from around the world which inspire great work.');
    }
}
