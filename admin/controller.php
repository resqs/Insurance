<?php 
/*
 * @package component Insurance for Joomla! 3.x
 * @version $Id: com_Insurance 1.0.0 2017-10-10 23:26:33Z $
 * @author Kian William Nowrouzian
 * @copyright (C) 2016- Kian William Nowrouzian
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 
 This file is part of Insurance.
    Insurance is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    Insurance is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with Insurance.  If not, see <http://www.gnu.org/licenses/>.
 
*/
?>

<?php
 defined('_JEXEC') or die('Access Restricted');
 jimport('joomla.application.component.controller');
 class InsuranceController extends JControllerLegacy
 {
	 protected $default_view = "insuranceforms";
	 
	 public function display($cachable = false, $urlparams = false)
	 {
		 $input = JFactory::getApplication()->input;
		 $myview = $input->get('view');
		 if($myview=='insuranceforms' ||  $myview==null)
		    InsuranceHelper::addSubmenu('insuranceforms');
           else
			    if($myview=='insuranceagents')
		            InsuranceHelper::addSubmenu('insuranceagents');
				else
					if($myview=='insuranceclients')
						  InsuranceHelper::addSubmenu('insuranceclients');

			
		 parent::display();
	 }
 }
