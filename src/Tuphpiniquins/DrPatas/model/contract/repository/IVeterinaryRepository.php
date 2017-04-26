<?php
declare(strict_types = 1);


namespace Tuphpiniquins\Drpatas\Model\Contract\Repository;

interface IVeterinaryRepository
{
    /**
     * Create a new Veterinary
     *
     * @param Veterinary $veterinary
     *
     * @return Veterinary An object with the created data
     */
    public function create(Veterinary $veterinary) : Veterinary;

    /**
     * Updates an existing Veterinary
     *
     * @param Veterinary $veterinary
     *
     * @return Veterinary An object with the updated data
     */
    public function update(Veterinary $veterinary) : Veterinary;

    /**
     * Deletes a Veterinary
     *
     * @param integer $id The ID to be deleted from repository
     *
     * @return boolean True if the data has been successfully deleted from repository
     */
    public function delete(int $id) : bool;

    /**
     * Finds a Veterinary using an ID as reference
     *
     * @param integer $id The ID to be searched
     *
     * @return Veterinary Returns a Veterinary object with the data found
     */
    public function findById(int $id) : Veterinary;

    /**
     * Get all available Veterinaries
     *
     * @param integer $take Number of rows to be returned
     * @param integer $page The number of actual page, if paging
     *
     * @return array A collection of Veterinary objects found
     */
    public function getList(int $take = 20, int $page = 1) : array;
}
