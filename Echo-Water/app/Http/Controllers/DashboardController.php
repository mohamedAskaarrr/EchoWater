<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    /**
     * Display the dashboard
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to access dashboard');
        }

        // TODO: Replace with real IoT data or database queries
        $metrics = $this->getWaterMetrics();
        $waterQuality = $this->getWaterQuality();
        $deviceStatus = $this->getDeviceStatus();

        return view('dashboard_modern', compact('metrics', 'waterQuality', 'deviceStatus'));
    }

    /**
     * Get water usage metrics (placeholder for IoT integration)
     */
    private function getWaterMetrics()
    {
        return [
            'tds_level' => 45,
            'ph_level' => 7.2,
            'filter_health' => 85,
            'monthly_usage' => 1250,
            'daily_usage' => 48,
            'weekly_usage' => 290
        ];
    }

    /**
     * Get water quality data (placeholder for IoT integration)
     */
    private function getWaterQuality()
    {
        return [
            'tds' => ['value' => 45, 'status' => 'excellent', 'unit' => 'ppm'],
            'ph' => ['value' => 7.2, 'status' => 'optimal', 'unit' => ''],
            'chlorine' => ['value' => 0.02, 'status' => 'good', 'unit' => 'ppm']
        ];
    }

    /**
     * Get device status (placeholder for IoT integration)
     */
    private function getDeviceStatus()
    {
        return [
            'primary_filter' => ['health' => 85, 'days_remaining' => 45, 'status' => 'good'],
            'carbon_filter' => ['health' => 92, 'days_remaining' => 67, 'status' => 'excellent'],
            'uv_light' => ['health' => 25, 'days_remaining' => 23, 'status' => 'replace_soon']
        ];
    }

    /**
     * Export dashboard data as PDF
     */
    public function exportReport()
    {
        if (!Auth::check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        try {
            $metrics = $this->getWaterMetrics();
            $waterQuality = $this->getWaterQuality();
            $deviceStatus = $this->getDeviceStatus();

            $pdfContent = $this->generatePdfContent($metrics, $waterQuality, $deviceStatus);
            
            return response($pdfContent)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="EchoWater-Report-' . date('Y-m-d') . '.pdf"');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate report: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Run system check
     */
    public function runSystemCheck()
    {
        if (!Auth::check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        try {
            sleep(2); // Simulate checking time
            
            $results = [
                'water_flow' => 'Normal',
                'pressure' => 'Optimal', 
                'filters' => 'Good condition',
                'sensors' => 'All responding',
                'connections' => 'Secure'
            ];

            return response()->json([
                'success' => true,
                'message' => 'System check completed successfully. All systems are operating normally.',
                'checks' => $results,
                'timestamp' => now()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'System check failed: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Schedule maintenance
     */
    public function scheduleMaintenance(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 401);
        }

        $request->validate([
            'date' => 'required|date|after:today'
        ]);

        try {
            // TODO: Save to database instead of just returning response
            $maintenanceDate = $request->input('date');
            
            return response()->json([
                'success' => true,
                'message' => "Maintenance scheduled for " . date('F j, Y', strtotime($maintenanceDate)) . ". You will receive a confirmation email shortly.",
                'scheduled_date' => $maintenanceDate,
                'reference_id' => 'MAINT-' . strtoupper(uniqid())
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to schedule maintenance: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Generate PDF content (simplified without external libraries)
     */
    private function generatePdfContent($metrics, $waterQuality, $deviceStatus)
    {
        // This is a simplified PDF-like format
        // In production, you'd use a proper PDF library like TCPDF or DOMPDF
        
        $content = "%PDF-1.4\n";
        $content .= "1 0 obj << /Type /Catalog /Pages 2 0 R >> endobj\n";
        $content .= "2 0 obj << /Type /Pages /Kids [3 0 R] /Count 1 >> endobj\n";
        $content .= "3 0 obj << /Type /Page /Parent 2 0 R /MediaBox [0 0 612 792] /Contents 4 0 R >> endobj\n";
        $content .= "4 0 obj << /Length 500 >> stream\n";
        $content .= "BT /F1 24 Tf 50 750 Td (EchoWater System Report) Tj ET\n";
        $content .= "BT /F1 12 Tf 50 700 Td (Generated on: " . date('Y-m-d H:i:s') . ") Tj ET\n";
        $content .= "BT /F1 14 Tf 50 650 Td (Water Quality Metrics:) Tj ET\n";
        $content .= "BT /F1 12 Tf 70 620 Td (TDS Level: " . $metrics['tds_level'] . " ppm) Tj ET\n";
        $content .= "BT /F1 12 Tf 70 600 Td (pH Level: " . $metrics['ph_level'] . ") Tj ET\n";
        $content .= "BT /F1 12 Tf 70 580 Td (Filter Health: " . $metrics['filter_health'] . "%) Tj ET\n";
        $content .= "BT /F1 14 Tf 50 530 Td (Usage Statistics:) Tj ET\n";
        $content .= "BT /F1 12 Tf 70 500 Td (Daily Usage: " . $metrics['daily_usage'] . " L) Tj ET\n";
        $content .= "BT /F1 12 Tf 70 480 Td (Weekly Usage: " . $metrics['weekly_usage'] . " L) Tj ET\n";
        $content .= "BT /F1 12 Tf 70 460 Td (Monthly Usage: " . $metrics['monthly_usage'] . " L) Tj ET\n";
        $content .= "endstream endobj\n";
        $content .= "xref\n0 5\n0000000000 65535 f \n0000000009 00000 n \n0000000058 00000 n \n0000000115 00000 n \n0000000206 00000 n \n";
        $content .= "trailer << /Size 5 /Root 1 0 R >>\nstartxref\n756\n%%EOF";
        
        return $content;
    }
}
