<?php

/**
 * Adds support for sharing features to a CalDAV server.
 *
 * @package Sabre
 * @subpackage CalDAV
 * @copyright Copyright (C) 2007-2012 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/) 
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
interface Sabre_CalDAV_Backend_SharingSupport extends Sabre_CalDAV_Backend_BackendInterface {

    /**
     * Updates the list of shares.
     *
     * The first array is a list of people that are to be added to the 
     * calendar.
     *
     * Every element in the add array has the following properties:
     *   * href - A url. Usually a mailto: address
     *   * commonName - Usually a first and last name, or false
     *   * summary - A description of the share, can also be false
     *   * readOnly - A boolean value
     *
     * Every element in the remove array is just the address string.
     *
     * @param mixed $calendarId 
     * @param array $add 
     * @param array $remove 
     * @return void
     */
    function updateShares($calendarId, array $add, array $remove); 

    /**
     * Returns the list of people whom this calendar is shared with.
     *
     * Every element in this array should have the following properties:
     *   * href - Often a mailto: address
     *   * commonName - Optional, for example a first + last name
     *   * status - See the Sabre_CalDAV_SharingPlugin::STATUS_ constants.
     *   * readOnly - boolean
     *   * summary - Optional, a description for the share
     *
     * @param mixed $calendarId 
     * @return array 
     */
    function getShares($calendarId); 

}
