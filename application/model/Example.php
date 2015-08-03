<?php
/**                   _
 * This is an example model
 * Shows how a simple MySQL model can be created
 */
namespace model;

use \Kima\Model;

class Example extends Model
{

    /**
     * Table name
     */
    const TABLE = 'example';

    /**
     * Name of the db engine to use
     * You can set the default one in the application.ini
     * as "database.default = mysql" and you won't have
     * to set it here
     */
    const DB_ENGINE = 'mysql';
    // Most models will work with both MySQL and Mongo engines
    // with just chaning the engine, try it!
    // const DB_ENGINE = 'mongo';

    /**
     * Database fields
     * Must include the table name for MySQL
     * Mongo fields should be defined with just the field name
     */
    const ID_EXAMPLE = 'example.id_example';
    const NAME = 'example.name';

    /**
     * Returns one record of the example table data
     * using the id as filter
     * @param  int     $id_example
     * @return Example
     */
    public function get_by_id($id_example)
    {
        // All filtered values are secured using prepared statements
        $this->filter([self::ID_EXAMPLE => $id_example])
            ->fetch([self::NAME]);
    }

    /**
     * Returns all the example table data as an array
     * @return array
     */
    public function get_all()
    {
        // All filtered values are secured using prepared statements
        $this->fetch_all([self::ID_EXAMPLE, self::NAME]);
    }

    /**
     * Saves a new example table data
     * @param  int     $id_example
     * @param  string  $name
     * @return boolean
     */
    public function save($id_example, $name)
    {
        return $this->put([
            self::ID_EXAMPLE => $id_example,
            self::NAME => $name
        ]);
    }
}
