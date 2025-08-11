import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Theme Management System
class ThemeManager {
    constructor() {
        this.currentTheme = localStorage.getItem('theme') || 'aqua';
        this.init();
    }

    init() {
        this.applyTheme(this.currentTheme);
        this.setupThemeToggle();
        this.initializeAnimations();
    }

    applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        this.currentTheme = theme;
        
        // Update theme-specific animations
        this.updateAnimations(theme);
        
        // Notify other components
        window.dispatchEvent(new CustomEvent('themeChanged', { detail: { theme } }));
    }

    toggleTheme() {
        const newTheme = this.currentTheme === 'aqua' ? 'tech' : 'aqua';
        this.applyTheme(newTheme);
        
        // Smooth transition effect
        document.body.style.transition = 'all 0.3s ease';
        setTimeout(() => {
            document.body.style.transition = '';
        }, 300);
    }

    setupThemeToggle() {
        const toggleButtons = document.querySelectorAll('[data-theme-toggle]');
        toggleButtons.forEach(button => {
            button.addEventListener('click', () => this.toggleTheme());
        });
    }

    updateAnimations(theme) {
        if (theme === 'aqua') {
            this.initializeAquaAnimations();
        } else {
            this.initializeTechAnimations();
        }
    }

    initializeAnimations() {
        // Common animations for both themes
        gsap.fromTo('.hero-content', 
            { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 1, ease: 'power2.out' }
        );

        // Scroll-triggered animations
        gsap.utils.toArray('.fade-in-up').forEach(element => {
            gsap.fromTo(element,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });
    }

    initializeAquaAnimations() {
        // Water droplet effects
        this.createWaterDroplets();
        
        // Ripple effects on buttons
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('click', this.createRipple);
        });
    }

    initializeTechAnimations() {
        // Matrix-style background
        this.createMatrixEffect();
        
        // Holographic cards
        this.setupHolographicCards();
        
        // Neon glow effects
        this.initializeNeonEffects();
    }

    createWaterDroplets() {
        const container = document.querySelector('.hero-section');
        if (!container) return;

        for (let i = 0; i < 10; i++) {
            const droplet = document.createElement('div');
            droplet.className = 'particle water-drop';
            droplet.style.cssText = `
                width: ${Math.random() * 20 + 10}px;
                height: ${Math.random() * 20 + 10}px;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation-delay: ${Math.random() * 6}s;
            `;
            container.appendChild(droplet);
        }
    }

    createRipple(event) {
        const button = event.currentTarget;
        const rect = button.getBoundingClientRect();
        const ripple = document.createElement('span');
        
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s ease-out;
            pointer-events: none;
        `;
        
        button.style.position = 'relative';
        button.style.overflow = 'hidden';
        button.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
    }

    createMatrixEffect() {
        const canvas = document.createElement('canvas');
        canvas.className = 'matrix-canvas';
        canvas.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.1;
            pointer-events: none;
        `;
        
        document.body.appendChild(canvas);
        
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        
        const matrix = "ECHOWATER0123456789ABCDEF";
        const drops = [];
        
        for (let x = 0; x < canvas.width / 15; x++) {
            drops[x] = 1;
        }
        
        function drawMatrix() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.04)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = '#00ff88';
            ctx.font = '15px JetBrains Mono';
            
            for (let i = 0; i < drops.length; i++) {
                const text = matrix[Math.floor(Math.random() * matrix.length)];
                ctx.fillText(text, i * 15, drops[i] * 15);
                
                if (drops[i] * 15 > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        
        setInterval(drawMatrix, 35);
    }

    setupHolographicCards() {
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / centerY * -10;
                const rotateY = (x - centerX) / centerX * 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });
    }

    initializeNeonEffects() {
        document.querySelectorAll('.neon-glow').forEach(element => {
            element.addEventListener('mouseenter', () => {
                element.style.boxShadow = '0 0 20px currentColor, 0 0 40px currentColor, 0 0 60px currentColor';
            });
            
            element.addEventListener('mouseleave', () => {
                element.style.boxShadow = '';
            });
        });
    }
}

// Alpine.js Components
document.addEventListener('alpine:init', () => {
    // Product Catalog Component
    Alpine.data('productCatalog', () => ({
        products: [],
        filteredProducts: [],
        filters: {
            category: '',
            priceRange: '',
            rating: 0,
            search: ''
        },
        sortBy: 'name',
        loading: true,

        async init() {
            await this.loadProducts();
            this.loading = false;
        },

        async loadProducts() {
            try {
                const response = await fetch('/api/products');
                const data = await response.json();
                this.products = data.data;
                this.filteredProducts = [...this.products];
            } catch (error) {
                console.error('Error loading products:', error);
            }
        },

        applyFilters() {
            let filtered = [...this.products];

            if (this.filters.category) {
                filtered = filtered.filter(p => p.category === this.filters.category);
            }

            if (this.filters.search) {
                const searchTerm = this.filters.search.toLowerCase();
                filtered = filtered.filter(p => 
                    p.name.toLowerCase().includes(searchTerm) ||
                    p.description.toLowerCase().includes(searchTerm)
                );
            }

            if (this.filters.rating) {
                filtered = filtered.filter(p => p.rating >= this.filters.rating);
            }

            // Sort products
            filtered.sort((a, b) => {
                switch (this.sortBy) {
                    case 'price-low': return a.price - b.price;
                    case 'price-high': return b.price - a.price;
                    case 'rating': return b.rating - a.rating;
                    case 'name': default: return a.name.localeCompare(b.name);
                }
            });

            this.filteredProducts = filtered;
        }
    }));

    // Dashboard Component
    Alpine.data('dashboard', () => ({
        analytics: {},
        notifications: [],
        loading: true,

        async init() {
            await this.loadAnalytics();
            this.loading = false;
        },

        async loadAnalytics() {
            try {
                const response = await fetch('/api/dashboard/analytics');
                const data = await response.json();
                this.analytics = data.data;
            } catch (error) {
                console.error('Error loading analytics:', error);
            }
        },

        formatNumber(num) {
            return new Intl.NumberFormat().format(num);
        }
    }));

    // Shopping Cart Component
    Alpine.data('shoppingCart', () => ({
        items: JSON.parse(localStorage.getItem('cart') || '[]'),
        isOpen: false,

        get total() {
            return this.items.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },

        get itemCount() {
            return this.items.reduce((sum, item) => sum + item.quantity, 0);
        },

        addItem(product, quantity = 1) {
            const existingItem = this.items.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                this.items.push({ ...product, quantity });
            }
            
            this.saveCart();
            this.showNotification(`${product.name} added to cart`);
        },

        removeItem(productId) {
            this.items = this.items.filter(item => item.id !== productId);
            this.saveCart();
        },

        updateQuantity(productId, quantity) {
            const item = this.items.find(item => item.id === productId);
            if (item) {
                item.quantity = Math.max(0, quantity);
                if (item.quantity === 0) {
                    this.removeItem(productId);
                }
            }
            this.saveCart();
        },

        saveCart() {
            localStorage.setItem('cart', JSON.stringify(this.items));
        },

        showNotification(message) {
            // Simple notification system
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(full)';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    }));
});

// Initialize Theme Manager
const themeManager = new ThemeManager();

// Initialize Alpine.js
Alpine.start();

// Utility Functions
window.EchoWater = {
    formatCurrency: (amount) => {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        }).format(amount);
    },

    formatDate: (date) => {
        return new Intl.DateTimeFormat('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }).format(new Date(date));
    },

    debounce: (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
};

// Global Error Handling
window.addEventListener('error', (event) => {
    console.error('Global error:', event.error);
});

// Service Worker Registration (for PWA capabilities)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => console.log('SW registered:', registration))
            .catch(error => console.log('SW registration failed:', error));
    });
}