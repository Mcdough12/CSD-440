<?php
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Module 11 Database PDF Report', 0, 1, 'C');

        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Generated Database Information Report', 0, 1, 'C');

        $this->Ln(5);
    }

    // Page Footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Create PDF object
$pdf = new PDF();
$pdf->AddPage();

// General Information Section
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'General Information', 0, 1);

$pdf->SetFont('Arial', '', 12);

$generalInfo = "This database stores records collected from the Module 8 assignment. The purpose of the database is to organize, retrieve, and display information efficiently using PHP and MySQL. This PDF demonstrates exporting relational database data into a professional report format.";

$pdf->MultiCell(0, 8, $generalInfo);

$pdf->Ln(10);

// Table Title
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Database Records', 0, 1);

// Table Header
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'ID', 1);
$pdf->Cell(50, 10, 'Name', 1);
$pdf->Cell(50, 10, 'Category', 1);
$pdf->Cell(50, 10, 'Description', 1);
$pdf->Ln();

// Query Database
$sql = "SELECT * FROM records";
$result = $conn->query($sql);

// Table Data
$pdf->SetFont('Arial', '', 11);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $pdf->Cell(30, 10, $row['id'], 1);
        $pdf->Cell(50, 10, $row['name'], 1);
        $pdf->Cell(50, 10, $row['category'], 1);
        $pdf->Cell(50, 10, $row['description'], 1);
        $pdf->Ln();
    }

} else {

    $pdf->Cell(180, 10, 'No records found.', 1, 1, 'C');
}

// Close database connection
$conn->close();

// Output PDF
$pdf->Output();
?>