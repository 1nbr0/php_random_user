<?php
class RandomUser {

    private $apiUrl;

    public function __construct(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    public function getMultipleUser(int $nbUser): ?array
    {
        $curl = curl_init("https://randomuser.me/api/{$this->apiUrl}{$nbUser}");
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
}