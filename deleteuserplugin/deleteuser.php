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


defined('_JEXEC') or die;


class PlgUserDeleteuser extends JPlugin
{
	
		public function onUserBeforeDelete($user)
		{
				$db = JFactory::getDbo();
		            $query = $db->getQuery(true);
					$query->select($db->quoteName('id'))->from($db->quoteName('#__insurance'));
					$db->setQuery($query);
					$ids = $db->loadObjectList();
                    for($i=0; $i<count($ids); $i++)
					{
		     	            $query = $db->getQuery(true);
//							$query = 'DELETE FROM TABLE #__'.$ids[$i]->id.' where userid='.$user['id'];
                			$query->delete($db->quoteName('#__'.$ids[$i]->id))->where($db->quoteName('userid') . '='. $user['id']);
							$db->setQuery($query);
							$db->execute();
					}
					
		}	
		
}
