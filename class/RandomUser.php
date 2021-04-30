<?php
class RandomUser {

    private $apiUrl;

    // Je passe en parametre de ma fonction constructeur une chaine de carractere me permetant de renseigner l'url à atteindre 
    // pour obtenir un nombre multiple d'utilisateurs

    public function __construct(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    // La fonction suivante me permet dans un premier temps d'appeler l'API, randomuser, en la complétant depuis random_user.php
    // Puis elle vérifie si le code http est correct

    public function getMultipleUser(int $nbUser): ?array
    {
        $curl = curl_init("https://randomuser.me/api/{$this->apiUrl}{$nbUser}"); // $nbUser récupere le nombre d'utilisateur à retourner pour compléter l'url afin d'afficher x utilisateur 
        curl_setopt_array( $curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cert.cer',
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);
        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            return null;
        }
        $results = [];
        $data = json_decode($data, true);
        foreach($data['results'] as $users) {
            $results[] = [
                'gender' => $users['gender'],
                'firstName' => $users['name']['first'],
                'lastName' => $users['name']['last'],
                'nat' => $users['nat']
            ];
        }
        return $results;
    }

    // Dans la fonction suivante j'aimerais me servir de ma fonction getMultipleUser pour reboucler sur des nouveaux utilisateurs au moment du clic sur le bouton "voir plus"
    // Elle n'est pas forcément correct. J'aimerais bien avoir votre avis et correction si correction il y a

    // public function getOtherUser($getMultipleUser)
    // {
    //     $this->getMultipleUser = $getMultipleUser;
    //     if( !is_null($getMultipleUser)) {
    //         return $multipleUser;
    //     }
    // }
}