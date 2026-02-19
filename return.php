<?php


$Users = [

  ['id' => 1,  'name' => 'Ellie'],
  ['id' => 2, 'name' => 'john']



];

function findUser($id, $Users)

      {
        foreach($Users as $User) {
          if($User['id'] == $id)
            {
              return $User;
            }
             
        }
         return null;
      }




  $result = findUser(2, $Users);

  if ($result)
    {
      echo "found:" . $result['name'] ;

    }

    else {
      echo "no";
    }