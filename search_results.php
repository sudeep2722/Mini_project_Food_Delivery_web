<?php
session_start();

if (isset($_SESSION['search_result'])) {
    $row = $_SESSION['search_result'];
    // Display the retrieved data
    echo '<table>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>' . $row->username . '</td>
                <td>' . $row->email . '</td>
            </tr> 
        </table>';
} else {
    echo "No search results found.";
}
?>
