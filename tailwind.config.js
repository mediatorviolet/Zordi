const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            gridTemplateRows: {
                custom: "15% 1fr 1fr",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
            fontWeight: ["hover"],
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
