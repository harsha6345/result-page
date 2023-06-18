/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: "640px", // Small devices (phones, 640px and up)
            md: "768px", // Medium devices (tablets, 768px and up)
            "md-lg": "900px",
            lg: "1024px", // Large devices (desktops, 1024px and up)
            xl: "1280px", // Extra large devices (large desktops, 1280px and up)
            "2xl": "1536px", // 2x Extra large devices (larger desktops, 1536px and up)
        },
        extend: {
            colors: {
                pictoblue: "#241033",
                pictored: "#d60606",
                pictoblue2: "rgba(45, 14, 68 )",
                transblack: "rgba(0,0,0,0.88)",
            },
        },
    },
    plugins: [],
};
