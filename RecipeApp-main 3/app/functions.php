<?php
// require_once 'configue/database.php';
// /**
//  * 📝 On créé une fonction qui récupère toutes les données de toutes les recettes. On apprendre plus tard que dans ces cas ci il ne faut jamais récupérer toute la donnée d'un item.
//  * Lit toutes les recettes du dossier spécifié et récupère leur contenu.
//  * @return array Tableau de toutes les recettes.
//  */
function getAllRecipes() {
    $recipes = [];

    $files = glob("data/recettes/*.json");

    foreach($files as $file) {
        // $file = "../data/recettes/1.json"
        $fileContent = file_get_contents($file);
        $recipe = json_decode($fileContent, true);

        array_push($recipes, $recipe);
    }
    return $recipes ; 
}
$files = getAllRecipes() ;
// function getAllRecipes() {
//     // 👩‍💻 Déclarer la variable $recipes comme un tableau vide pour stocker les données des recettes.
//     $recipes = [];
//     // 👩‍💻 Utiliser la fonction `glob()` pour récupérer les noms de tous les fichiers JSON de recettes dans le dossier 'data/recettes/'.
//     $recipeFiles = glob("data/recettes/*.json");

//     // 👩‍💻 Itérer à travers chaque fichier de recettes récupéré par `glob()`.
//     foreach ($recipeFiles as $file) {
//         // Lire le contenu du fichier JSON actuel (file_get_contents).
//         $content = file_get_contents($file);
//         // Décoder le contenu JSON en un tableau PHP (json_decode) et l'ajouter au tableau $recipes.
//         $recipedata = json_decode($content, true);
//         $recipes[] = $recipedata;
//     }
//     // 👩‍💻 Retourner le tableau $recipes contenant toutes les recettes.
//     return $recipes;
// }
// /**
//  * 
//  * Lit une recette spécifique basée sur son ID et récupère son contenu.
//  * @param int $id ID de la recette à lire.
//  * @return array|null Tableau contenant les détails de la recette, null si non trouvée.
//  */
function getRecipe($id) {

    $filePath = ("data/recettes/".$id.".json");

       if (file_exists($filePath)){
        $fileContent = file_get_contents($filePath);
        return json_decode($fileContent, true);


       }else {
       $recipe = null; 
       }
    }
// function getRecipe($id) {
//     // 👩‍💻 Définir une variable contenant le chemin du fichier en concaténant le chemin du dossier, l'ID de la recette, et l'extension '.json'.
//     $cheminfichier = "data/recettes/$id.json";


    
//     // 👩‍💻 Récupérer le contenu du fichier (si le fichier spécifié existe).
//     if (file_exists($cheminfichier)) {
//         // Lire le contenu du fichier JSON actuel (file_get_contents).
//         $content = file_get_contents($cheminfichier);
//         // Décoder le contenu JSON en un tableau PHP (json_decode) et le retourner.
//         return json_decode($content, true);
//     } else {
//         return null;
//     }
// }    // 👩‍💻 Si le fichier n'existe pas, retourner null.

?>
