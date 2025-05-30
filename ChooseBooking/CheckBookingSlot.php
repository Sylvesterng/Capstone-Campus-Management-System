<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');
include 'connection.php'; // Adjust path as needed

// Get parameters safely, set defaults if missing
$facility = isset($_GET['facility']) ? $connection->real_escape_string($_GET['facility']) : '';
$day = isset($_GET['day']) ? $connection->real_escape_string($_GET['day']) : '';


// Prepare booking slots and their corresponding timetable tables
$slots = [
    'BookTableSlot1' => 'booking_slot1',
    'BookTableSlot2' => 'booking_slot2',
    'BookTableSlot3' => 'booking_slot3',
    'BookTableSlot4' => 'booking_slot4'
];

// Initialize response array
$response = [];

// For each booking slot, check if there's any booking for that facility and day
foreach ($slots as $bookingColumn => $slotTable) {
    switch ($slotTable) {
        case 'booking_slot1':
            $slotIdColumn = 'Slot1_ID';
            break;
        case 'booking_slot2':
            $slotIdColumn = 'Slot2_ID';
            break;
        case 'booking_slot3':
            $slotIdColumn = 'Slot3_ID';
            break;
        case 'booking_slot4':
            $slotIdColumn = 'Slot4_ID';
            break;
        default:
            die("Invalid slot table");
    }
    $sql = "
        SELECT 1
        FROM bookingtable bt
        JOIN $slotTable bs ON bt.$bookingColumn = bs.$slotIdColumn
        WHERE bs.FacilityID = '$facility' AND bs.Day = '$day'
        LIMIT 1
    ";
    
    $result = $connection->query($sql);
    $response[$bookingColumn] = ($result && $result->num_rows > 0) ? true : false;
}

// Output JSON response
echo json_encode($response);