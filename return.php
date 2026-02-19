<?php


$Users = ["id"];

function findUser($id, $Users)

      {
        foreach($Users as $User) {
          if($User['id'] == $id)
            {
              return $User;
            }
              return null;
        }
      }