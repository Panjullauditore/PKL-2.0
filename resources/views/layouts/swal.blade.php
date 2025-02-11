@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
        /* Web Interface Color Palette */
        :root {
            /* Background Colors */
            --swal-bg-dark: #1E2634;
            --swal-bg-medium: #252F3E;
            --swal-bg-light: #2C3A4A;

            /* Text Colors */
            --swal-text-primary: #FFFFFF;
            --swal-text-secondary: #FFFFFF;

            /* Accent Colors */
            --swal-accent-blue: #3182CE;
            --swal-accent-red: #E53E3E;

            /* Additional Alert Colors */
            --swal-success: #48BB78;
            --swal-error: #E53E3E;
            --swal-warning: #ED8936;
            --swal-info: #3182CE;
        }

        body {
            background-color: var(--swal-bg-dark);
            color: var(--swal-text-primary);
        }

        .swal2-container {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .swal2-popup {
            background: var(--swal-bg-medium) !important;
            border-radius: 8px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            border: 1px solid var(--swal-bg-light);
        }

        /* Title Styling */
        .swal2-title {
            color: var(--swal-text-primary) !important;
            font-weight: 600;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        /* Content Styling */
        .swal2-content {
            color: var(--swal-text-primary) !important;
            font-size: 1em;
            line-height: 1.6;
        }

        /* Buttons Styling */
        .swal2-confirm, .swal2-cancel {
            margin: 10px;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .swal2-confirm {
            background: var(--swal-accent-blue) !important;
            border: none !important;
            color: var(--swal-text-primary) !important;
        }

        .swal2-confirm:hover {
            background: color-mix(in srgb, var(--swal-accent-blue) 90%, white) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .swal2-cancel {
            background-color: var(--swal-bg-light) !important;
            color: var(--swal-text-primary) !important;
            border: none;
        }

        .swal2-cancel:hover {
            background-color: color-mix(in srgb, var(--swal-bg-light) 90%, white) !important;
        }

        /* Error Alert Styling - Matching Screenshot */
        .swal2-error-container {
            background-color: var(--swal-accent-red) !important;
            color: var(--swal-text-primary) !important;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
        }

        .swal2-error-message {
            background: transparent !important;
            color: var(--swal-text-primary) !important;
            white-space: normal;
            word-break: break-word;
        }

        /* Icons Styling */
        .swal2-icon {
            border-color: rgba(255,255,255,0.1) !important;
        }

        .swal2-success-ring {
            border-color: var(--swal-success) !important;
        }

        .swal2-icon.swal2-success [class^='swal2-success-line'] {
            background-color: var(--swal-success) !important;
        }

        .swal2-icon.swal2-error {
            border-color: var(--swal-error) !important;
        }

        .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            background-color: var(--swal-error) !important;
        }

        /* Input Styling */
        .swal2-input, .swal2-textarea {
            background-color: var(--swal-bg-light) !important;
            border: 1px solid var(--swal-bg-medium) !important;
            color: var(--swal-text-primary) !important;
        }

        /* Input Label */
        .swal2-label {
            color: var(--swal-text-primary) !important;
        }

        /* Close Button */
        .swal2-close {
            color: var(--swal-text-primary) !important;
        }

        .swal2-close:hover {
            color: var(--swal-text-primary) !important;
        }

        /* Star Rating */
        .swal2-star {
            color: #FFD700;
        }
</style>