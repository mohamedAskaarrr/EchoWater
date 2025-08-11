<?php $title = "Dashboard - EchoWater | Smart Water Monitoring"; ?>
<?php ob_start(); ?>

<!-- Dashboard Hero Section -->
<section class="bg-gradient-to-br from-water-blue via-water-dark to-eco-green dark:from-dark-800 dark:via-dark-900 dark:to-dark-700 text-white py-12 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="dashboardPattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="10" cy="10" r="1" fill="white" opacity="0.3"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#dashboardPattern)"/>
        </svg>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between">
            <div data-aos="fade-right">
                <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-white dark:text-gray-100">Smart Water Dashboard</h1>
                <p class="text-xl text-blue-100 dark:text-gray-300">Real-time monitoring and insights for your EchoWater system</p>
            </div>
            <div class="hidden lg:block" data-aos="fade-left">
                <svg class="w-32 h-32 text-white/20 dark:text-gray-300/20" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats Cards -->
<section class="py-8 -mt-8 relative z-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Water Quality Score -->
            <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-eco-green to-green-600 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-award text-white text-xl"></i>
                    </div>
                    <span class="text-2xl">💧</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2">Water Quality</h3>
                <div class="flex items-end space-x-2">
                    <span class="text-3xl font-bold text-eco-green dark:text-green-400">Excellent</span>
                    <span class="text-sm text-green-600 dark:text-green-400 bg-green-100 dark:bg-green-900/20 px-2 py-1 rounded-full">95/100</span>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">All parameters within optimal range</p>
            </div>

            <!-- TDS Level -->
            <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-water-blue to-blue-600 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-tint text-white text-xl"></i>
                    </div>
                    <span class="text-2xl">🧪</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2">TDS Level</h3>
                <div class="flex items-end space-x-2">
                    <span class="text-3xl font-bold text-water-blue dark:text-water-light"><?= $metrics['tds_level'] ?? 45 ?></span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">ppm</span>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Optimal range: 30-150 ppm</p>
            </div>

            <!-- pH Level -->
            <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-flask text-white text-xl"></i>
                    </div>
                    <span class="text-2xl">⚖️</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2">pH Balance</h3>
                <div class="flex items-end space-x-2">
                    <span class="text-3xl font-bold text-purple-600 dark:text-purple-400"><?= $metrics['ph_level'] ?? 7.2 ?></span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">pH</span>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Perfectly balanced</p>
            </div>

            <!-- Filter Health -->
            <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-filter text-white text-xl"></i>
                    </div>
                    <span class="text-2xl">🔧</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-2">Filter Health</h3>
                <div class="flex items-end space-x-2">
                    <span class="text-3xl font-bold text-orange-600 dark:text-orange-400"><?= $metrics['filter_health'] ?? 85 ?>%</span>
                    <span class="text-sm text-orange-600 dark:text-orange-400 bg-orange-100 dark:bg-orange-900/20 px-2 py-1 rounded-full">Good</span>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Replace in ~45 days</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Dashboard Content -->
<section class="py-12 bg-gray-50 dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Water Quality Chart -->
            <div class="lg:col-span-2 card-hover bg-white dark:bg-dark-800 rounded-3xl p-8 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Water Quality Trends</h2>
                    <div class="flex space-x-2">
                        <button class="px-4 py-2 bg-water-blue dark:bg-water-light text-white rounded-lg text-sm">24H</button>
                        <button class="px-4 py-2 bg-gray-100 dark:bg-dark-700 text-gray-600 dark:text-gray-300 rounded-lg text-sm">7D</button>
                        <button class="px-4 py-2 bg-gray-100 dark:bg-dark-700 text-gray-600 dark:text-gray-300 rounded-lg text-sm">30D</button>
                    </div>
                </div>
                
                <!-- Chart Placeholder with SVG -->
                <div class="h-64 bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-dark-700 dark:to-dark-600 rounded-2xl flex items-center justify-center relative overflow-hidden">
                    <svg class="w-full h-full" viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
                        <!-- Grid lines -->
                        <defs>
                            <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#e5e7eb" stroke-width="1"/>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#grid)" opacity="0.5"/>
                        
                        <!-- Sample trend line -->
                        <path d="M20 160 Q80 140 120 120 T200 100 T280 90 T360 85" 
                              fill="none" 
                              stroke="url(#waterGradient)" 
                              stroke-width="3" 
                              class="animate-pulse"/>
                        
                        <!-- Data points -->
                        <circle cx="120" cy="120" r="4" fill="#0ea5e9" class="animate-pulse"/>
                        <circle cx="200" cy="100" r="4" fill="#0ea5e9" class="animate-pulse"/>
                        <circle cx="280" cy="90" r="4" fill="#0ea5e9" class="animate-pulse"/>
                        <circle cx="360" cy="85" r="4" fill="#0ea5e9" class="animate-pulse"/>
                    </svg>
                    
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <i class="fas fa-chart-line text-4xl text-water-blue dark:text-water-light mb-4 opacity-50"></i>
                            <p class="text-gray-500 dark:text-gray-400">Real-time water quality monitoring</p>
                            <p class="text-sm text-gray-400 dark:text-gray-500 mt-2">Quality improving over time</p>
                        </div>
                    </div>
                </div>
                
                <!-- Chart Legend -->
                <div class="flex items-center justify-center space-x-6 mt-6">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-water-blue dark:bg-water-light rounded-full mr-2"></div>
                        <span class="text-sm text-gray-600 dark:text-gray-400">TDS Level</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-eco-green dark:bg-green-400 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-600 dark:text-gray-400">pH Balance</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-purple-500 dark:bg-purple-400 rounded-full mr-2"></div>
                        <span class="text-sm text-gray-600 dark:text-gray-400">Chlorine</span>
                    </div>
                </div>
            </div>

            <!-- Device Status -->
            <div class="space-y-6">
                <!-- System Status -->
                <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4 flex items-center">
                        <i class="fas fa-cogs text-water-blue dark:text-water-light mr-3"></i>
                        System Status
                    </h3>
                    
                    <div class="space-y-4">
                        <?php 
                        $devices = [
                            ['name' => 'Primary Filter', 'health' => 85, 'status' => 'good', 'icon' => 'fa-filter'],
                            ['name' => 'Carbon Filter', 'health' => 92, 'status' => 'excellent', 'icon' => 'fa-leaf'],
                            ['name' => 'UV Light', 'health' => 25, 'status' => 'replace_soon', 'icon' => 'fa-lightbulb']
                        ];
                        foreach($devices as $device): 
                        ?>
                        <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-dark-700 rounded-xl">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-r from-water-blue to-eco-green rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas <?= $device['icon'] ?> text-white text-sm"></i>
                                </div>
                                <span class="font-medium text-gray-800 dark:text-gray-100"><?= $device['name'] ?></span>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-bold <?= $device['health'] > 70 ? 'text-green-600 dark:text-green-400' : ($device['health'] > 40 ? 'text-orange-600 dark:text-orange-400' : 'text-red-600 dark:text-red-400') ?>">
                                    <?= $device['health'] ?>%
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 capitalize"><?= str_replace('_', ' ', $device['status']) ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Usage Statistics -->
                <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4 flex items-center">
                        <i class="fas fa-chart-bar text-eco-green dark:text-green-400 mr-3"></i>
                        Usage Stats
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Today</span>
                            <span class="font-bold text-gray-800 dark:text-gray-100"><?= $metrics['daily_usage'] ?? 48 ?>L</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-water-blue to-eco-green h-2 rounded-full" style="width: 60%"></div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-400">This Week</span>
                            <span class="font-bold text-gray-800 dark:text-gray-100"><?= $metrics['weekly_usage'] ?? 290 ?>L</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-eco-green to-water-blue h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-400">This Month</span>
                            <span class="font-bold text-gray-800 dark:text-gray-100"><?= $metrics['monthly_usage'] ?? 1250 ?>L</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-dark-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-water-blue to-water-dark h-2 rounded-full" style="width: 83%"></div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4 flex items-center">
                        <i class="fas fa-bolt text-yellow-500 dark:text-yellow-400 mr-3"></i>
                        Quick Actions
                    </h3>
                    
                    <div class="space-y-3">
                        <button id="systemCheckBtn" class="w-full bg-gradient-to-r from-water-blue to-water-dark dark:from-water-light dark:to-water-blue text-white py-3 px-4 rounded-xl font-medium hover:from-water-dark hover:to-water-blue dark:hover:from-water-blue dark:hover:to-water-dark transition-all duration-300 flex items-center justify-center group relative overflow-hidden">
                            <span class="loading-spinner hidden absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-spinner fa-spin text-xl"></i>
                            </span>
                            <span class="button-content flex items-center justify-center">
                                <i class="fas fa-sync-alt mr-2 group-hover:rotate-180 transition-transform duration-500"></i>
                                Run System Check
                            </span>
                        </button>
                        <button id="maintenanceBtn" class="w-full bg-gradient-to-r from-eco-green to-green-600 dark:from-green-400 dark:to-green-600 text-white py-3 px-4 rounded-xl font-medium hover:from-green-600 hover:to-eco-green dark:hover:from-green-600 dark:hover:to-green-400 transition-all duration-300 flex items-center justify-center group relative overflow-hidden">
                            <span class="loading-spinner hidden absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-spinner fa-spin text-xl"></i>
                            </span>
                            <span class="button-content flex items-center justify-center">
                                <i class="fas fa-calendar-alt mr-2 group-hover:scale-110 transition-transform duration-300"></i>
                                Schedule Maintenance
                            </span>
                        </button>
                        <button id="exportBtn" class="w-full bg-gradient-to-r from-purple-500 to-purple-600 dark:from-purple-400 dark:to-purple-600 text-white py-3 px-4 rounded-xl font-medium hover:from-purple-600 hover:to-purple-500 dark:hover:from-purple-600 dark:hover:to-purple-400 transition-all duration-300 flex items-center justify-center group relative overflow-hidden">
                            <span class="loading-spinner hidden absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-spinner fa-spin text-xl"></i>
                            </span>
                            <span class="button-content flex items-center justify-center">
                                <i class="fas fa-download mr-2 group-hover:scale-110 transition-transform duration-300"></i>
                                Export Report
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Activity -->
<section class="py-12 bg-gray-50 dark:bg-dark-900">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-8" data-aos="fade-up">Recent Activity</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Activity Feed -->
            <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-6 flex items-center">
                    <i class="fas fa-clock text-water-blue dark:text-water-light mr-3"></i>
                    System Events
                </h3>
                
                <div class="space-y-4">
                    <?php 
                    $activities = [
                        ['time' => '2 hours ago', 'event' => 'Filter performance optimized', 'type' => 'success'],
                        ['time' => '5 hours ago', 'event' => 'Water quality test completed', 'type' => 'info'],
                        ['time' => '1 day ago', 'event' => 'Monthly maintenance reminder', 'type' => 'warning'],
                        ['time' => '2 days ago', 'event' => 'System backup completed', 'type' => 'success']
                    ];
                    foreach($activities as $activity): 
                    ?>
                    <div class="flex items-center p-3 bg-gray-50 dark:bg-dark-700 rounded-xl">
                        <div class="w-3 h-3 <?= $activity['type'] === 'success' ? 'bg-green-500 dark:bg-green-400' : ($activity['type'] === 'warning' ? 'bg-yellow-500 dark:bg-yellow-400' : 'bg-blue-500 dark:bg-blue-400') ?> rounded-full mr-4"></div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800 dark:text-gray-100"><?= $activity['event'] ?></p>
                            <p class="text-sm text-gray-500 dark:text-gray-400"><?= $activity['time'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Alerts & Notifications -->
            <div class="card-hover bg-white dark:bg-dark-800 rounded-3xl p-6 shadow-lg border border-gray-100 dark:border-dark-700" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-6 flex items-center">
                    <i class="fas fa-bell text-yellow-500 dark:text-yellow-400 mr-3"></i>
                    Alerts & Tips
                </h3>
                
                <div class="space-y-4">
                    <div class="p-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-700 rounded-xl">
                        <div class="flex items-start">
                            <i class="fas fa-exclamation-triangle text-yellow-600 dark:text-yellow-400 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold text-yellow-800 dark:text-yellow-300">UV Light Maintenance</h4>
                                <p class="text-sm text-yellow-700 dark:text-yellow-400 mt-1">UV light efficiency is at 25%. Consider replacement within 30 days.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-700 rounded-xl">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-blue-600 dark:text-blue-400 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold text-blue-800 dark:text-blue-300">Tip: Save Water</h4>
                                <p class="text-sm text-blue-700 dark:text-blue-400 mt-1">Your usage is 15% below average. Great conservation efforts!</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-700 rounded-xl">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-semibold text-green-800 dark:text-green-300">System Optimal</h4>
                                <p class="text-sm text-green-700 dark:text-green-400 mt-1">All systems running smoothly. Water quality is excellent.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success/Error Modal -->
<div id="actionModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="display: none;">
    <div class="bg-white dark:bg-dark-800 p-6 rounded-xl shadow-xl max-w-sm mx-4 transform scale-95 transition-transform duration-300">
        <div class="text-center">
            <div id="modalIcon" class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center">
                <!-- Icon will be set dynamically -->
            </div>
            <h3 id="modalTitle" class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Action Completed</h3>
            <p id="modalMessage" class="text-gray-600 dark:text-gray-400 mb-4">Your action has been completed successfully.</p>
            <button id="modalClose" class="bg-gradient-to-r from-water-blue to-water-dark text-white px-6 py-2 rounded-lg hover:from-water-dark hover:to-water-blue transition-all duration-300">
                Close
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quick Actions functionality
    const systemCheckBtn = document.getElementById('systemCheckBtn');
    const maintenanceBtn = document.getElementById('maintenanceBtn');
    const exportBtn = document.getElementById('exportBtn');
    const modal = document.getElementById('actionModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');
    const modalIcon = document.getElementById('modalIcon');
    const modalClose = document.getElementById('modalClose');

    // Get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    function getHeaders() {
        const headers = {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        };
        
        if (csrfToken) {
            headers['X-CSRF-TOKEN'] = csrfToken;
        }
        
        return headers;
    }

    function showLoading(button) {
        const loadingSpinner = button.querySelector('.loading-spinner');
        const buttonContent = button.querySelector('.button-content');
        loadingSpinner.classList.remove('hidden');
        buttonContent.classList.add('opacity-0');
        button.disabled = true;
    }

    function hideLoading(button) {
        const loadingSpinner = button.querySelector('.loading-spinner');
        const buttonContent = button.querySelector('.button-content');
        loadingSpinner.classList.add('hidden');
        buttonContent.classList.remove('opacity-0');
        button.disabled = false;
    }

    function showModal(title, message, isSuccess = true) {
        modalTitle.textContent = title;
        modalMessage.textContent = message;
        
        modalIcon.className = `w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center ${isSuccess ? 'bg-green-100 dark:bg-green-900' : 'bg-red-100 dark:bg-red-900'}`;
        modalIcon.innerHTML = `<i class="fas ${isSuccess ? 'fa-check' : 'fa-times'} text-2xl ${isSuccess ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'}"></i>`;
        
        modal.style.display = 'flex';
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.querySelector('.bg-white').classList.remove('scale-95');
            modal.querySelector('.bg-white').classList.add('scale-100');
        }, 10);
    }

    function hideModal() {
        modal.querySelector('.bg-white').classList.remove('scale-100');
        modal.querySelector('.bg-white').classList.add('scale-95');
        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.add('hidden');
        }, 300);
    }

    modalClose.addEventListener('click', hideModal);
    modal.addEventListener('click', function(e) {
        if (e.target === modal) hideModal();
    });

    // System Check
    systemCheckBtn.addEventListener('click', function() {
        showLoading(this);
        
        fetch('/dashboard/system-check', {
            method: 'POST',
            headers: getHeaders()
        })
        .then(response => response.json())
        .then(data => {
            hideLoading(this);
            if (data.success) {
                showModal('System Check Complete', data.message, true);
            } else {
                showModal('System Check Failed', data.message || 'An error occurred during system check.', false);
            }
        })
        .catch(error => {
            hideLoading(this);
            console.error('System check error:', error);
            showModal('Error', 'Failed to perform system check. Please try again.', false);
        });
    });

    // Schedule Maintenance
    maintenanceBtn.addEventListener('click', function() {
        showLoading(this);
        
        fetch('/dashboard/schedule-maintenance', {
            method: 'POST',
            headers: getHeaders()
        })
        .then(response => response.json())
        .then(data => {
            hideLoading(this);
            if (data.success) {
                showModal('Maintenance Scheduled', data.message, true);
            } else {
                showModal('Scheduling Failed', data.message || 'Failed to schedule maintenance.', false);
            }
        })
        .catch(error => {
            hideLoading(this);
            console.error('Maintenance scheduling error:', error);
            showModal('Error', 'Failed to schedule maintenance. Please try again.', false);
        });
    });

    // Export Report
    exportBtn.addEventListener('click', function() {
        showLoading(this);
        
        fetch('/dashboard/export-report', {
            method: 'POST',
            headers: getHeaders()
        })
        .then(response => {
            if (response.ok && response.headers.get('content-type')?.includes('application/pdf')) {
                return response.blob();
            } else {
                return response.json();
            }
        })
        .then(data => {
            hideLoading(this);
            if (data instanceof Blob) {
                // Create download link for PDF
                const url = window.URL.createObjectURL(data);
                const a = document.createElement('a');
                a.href = url;
                a.download = `water-quality-report-${new Date().toISOString().split('T')[0]}.pdf`;
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(url);
                document.body.removeChild(a);
                showModal('Report Downloaded', 'Your water quality report has been downloaded successfully.', true);
            } else {
                showModal('Export Failed', data.message || 'Failed to export report.', false);
            }
        })
        .catch(error => {
            hideLoading(this);
            console.error('Export error:', error);
            showModal('Error', 'Failed to export report. Please try again.', false);
        });
    });
});
</script>

<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layouts/modern.php'; ?>
