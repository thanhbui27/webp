<?php

use MyApp\Controller;
use MyApp\Database;

/**
 * HomeController Class
 *
 * Represents the controller for the home-related functionality.
 */
class DirectPageController extends Controller
{
    /**
     * Display the index page.
     */
    public function diendan()
    {
        $data['title'] = "Diễn Đàn";
        $data['isShow'] = true;
        $this->template('header', $data);
        $this->view('diendan', $data);
        $this->template('footer');
    }

    public function gioithieu()
    {
        $data['title'] = "Giới thiệu";
        $this->template('header', $data);
        $this->view('gioithieu', $data);
        $this->template('footer');
    }

    public function registertnc()
    {
        $data['title'] = "Registertnc";
        $this->template('header', $data);
        $this->view('registertnc', $data);
        $this->template('footer');
    }

    public function rank()
    {
        $data['title'] = "Rank";
        $data['isShow'] = true;
        $this->template('header', $data);
        $this->view('rank', $data);
        $this->template('footer');
    }

    public function allevent()
    {
        $data['title'] = "All Event";
        $data['isShow'] = true;
        $this->template('header', $data);
        $this->view('allevent', $data);
        $this->template('footer');
    }

    public function cochegame()
    {
        $data['title'] = "Cơ chế game";
        $data['isShow'] = true;
        $this->template('header', $data);
        $this->view('cochegame', $data);
        $this->template('footer');
    }
     
    public function card()
    {
        if(!isset($_SESSION['user'])) {
            header("Location: /dangnhap");
            exit;
        }
        $data['title'] = "Nap thẻ";
        $data['isShow'] = true;
        $this->template('header', $data);
        $this->view('card', $data);
        $this->template('footer');
    }

    public function bank()
    {
        if(!isset($_SESSION['user'])) {
            header("Location: /dangnhap");
            exit;
        }
        $data['title'] = "bank";
        $data['isShow'] = true;
        $this->template('header', $data);
        $this->view('bank', $data);
        $this->template('footer');
    }
}
