<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

$router->get('/', 'HomeController::home');
$router->get('/login', 'HomeController::login');
$router->get('/register', 'HomeController::register');
$router->get('/about', 'HomeController::about');
$router->get('/services', 'HomeController::services');
$router->get('/eligibility', 'HomeController::eligibility');
$router->get('/rules', 'HomeController::rules');
$router->get('/contact', 'HomeController::contact');
$router->get('/search', 'HomeController::search');
$router->get('/dashboard', 'HomeController::dashboard');
$router->get('/manageservices', 'HomeController::manageservices');
$router->get('/editservices', 'HomeController::editservices');
$router->get('/managescdetails', 'HomeController::managescdetails');
$router->get('/editscdetails', 'HomeController::editscdetails');
$router->get('/unreadenq', 'HomeController::unreadenq');
$router->get('/viewenquiry', 'HomeController::viewenquiry');
$router->get('/readenq', 'HomeController::readenq');
$router->get('/aboutus', 'HomeController::aboutus');
$router->get('/contactus', 'HomeController::contactus');
$router->get('/page', 'HomeController::page');
$router->get('/newrules', 'HomeController::newrules');
$router->get('/addservices', 'HomeController::addservices');
$router->get('/datesreports', 'HomeController::datesreports');
$router->get('/addscdetails', 'HomeController::addscdetails');
$router->get('/searchs', 'HomeController::searchs');
