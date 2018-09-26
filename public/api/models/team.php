<?php
class Team
{
  public $id;
  public $name;

  public function __construct($data) {

  }

  public static function findAll() {
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    $sql = 'SELECT * FROM Team';

    $statement = $db->prepare($sql);

    $success = $statement->execute();

    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $theTeam =  new Team($row);
      array_push($arr, $theTeam);
    }
    // 4.b. return the array of work objects
    return $arr;
  }
}
