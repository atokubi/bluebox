<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * @package    Netlist
 * @author     K Anderson <bitbashing@gmail.com>
 * @author     Darren Schreiber <d@d-man.org>
 * @license    Mozilla Public License (MPL)
 */
class NetListManager_Plugin extends Bluebox_Plugin
{
    public function delete()
    {
        $base = Event::$data;

        if (!$base)
        {
            return FALSE;
        }

        // Stop the delete of system net lists
        if (!empty($base['system_list']))
        {
            throw new Bluebox_Validation_Exception($base['name'] . ' is generated by FreeSwitch and can not be removed!', 2);
        }
    }
}