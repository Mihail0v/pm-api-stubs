<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for backing up and restoring clients
 *
 * @package Plesk_Modules
 * @since 17.0
 */
abstract class pm_Hook_Backup_Client implements pm_Hook_Backup, pm_Hook_Interface
{

    /**
     * Define the logic after backing up a client
     *
     * @param pm_Client $client The client that is backuped
     */
    public function postBackup($client) { }

    /**
     * Define the content to be stored
     *
     * ```php
     * [
     *     string, // Serialized config related to this client
     *     array,  // Array of relative paths inside extension's 'var' directory that will be include in backup
     *     array,  // Array of relative paths inside extension's 'var' directory that will be exclude from backup
     * ]
     * ```
     *
     * @param pm_Client $client The client that is backuped
     *
     * @return array
     */
    public function backup($client) { }

    /**
     * Define the logic on restoring a client
     *
     * @param pm_Client $client The client that is restored
     * @param string $pleskVersion Version of Plesk when backup was created
     * @param string $extVersion Version of extension when backup was created
     * @param string $config Stored config related to restoring client
     * @param string $contentDir Directory with content related to restoring client
     */
    public function restore($client, $pleskVersion, $extVersion, $config, $contentDir) { }

}
