<?php
//  add function for select all projects
function getAllProjects($db) {
    $sql = "SELECT * FROM project";
    $query = $db->query($sql);
    if($query){
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }else{
        return false;
    }
}
//  add function for select project by id
function getProjectById($db, $id) {
    $sql = "SELECT * FROM project WHERE id = '$id'";
    $query = $db->query($sql);
    if ($query) {
        return $query->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }    
}
//  add function for select project by name
function getProjectByName($db, $name) {
    $sql = "SELECT * FROM project WHERE name = '$name'";
    $query = $db->query($sql);
    if ($query) {
        return $query->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}
//  add function for delete project by id
function deleteProjectById($db, $id) {
    $sql = "DELETE FROM project WHERE id = ':id'";
    $stmt = $db->prepare($sql); // PREPARATION DE LA REQUETE SQL
    $stmt->bindValue(':id', $id); // BIND (AFFECTATION) (:id ACCEUIL $id)
    $stmt->execute(); // EXECUTION DE LA REQUETE
}
//  add function for update project by id
function updateProjectById($db, $id, $name, $category, $image_path) {
    $sql = "UPDATE project SET name = :name, category = :category, image_path = :image_path WHERE id = :id";
    $stmt = $db->prepare($sql); // PREPARATION DE LA REQUETE SQL
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':image_path', $image_path);
    $stmt->execute(); // EXECUTION DE LA REQUETE
    
}
//  add function for insert project
function insertProject($db, $name, $category, $image_path) {
    $sql = "INSERT INTO project (name, category, image_path) VALUES (:name, :category, :image_path)";
    $stmt = $db->prepare($sql); // PREPARATION DE LA REQUETE SQL
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':category', $category);
    $stmt->bindValue(':image_path', $image_path);
    $stmt->execute(); // EXECUTION DE LA REQUETE
}
