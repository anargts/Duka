<?php namespace Admin\Controller;

use View;
use AdminController;
use Input;

use Device;
use User;
use Horse;
use Race;

class DashboardController extends AdminController{
  public function getIndex()
  {
    return "This is your admin dashboard view";
  }
}
