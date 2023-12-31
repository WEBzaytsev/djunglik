/** @type {import('tailwindcss').Config} */
module.exports = {
    future: {
        hoverOnlyWhenSupported: true,
    },
    mode: "jit",
    content: [
        '**/*.php',
        '!vendor/**/*.php',
        './src/js/**/*.js',
        './src/scss/**/*.scss',
    ],
    theme: {
        extend: {
            spacing: () => {
                return {
                    0.75: '0.1875rem',
                    2.75: '0.6875rem',
                    3.25: '0.8125rem',
                    4.5: '1.125rem',
                    5.5: '1.375rem',
                    6.25: '1.5625rem',
                    6.5: '1.625rem',
                    7.5: '1.875rem',
                    8.5: '2.125rem',
                    9.5: '2.375rem',
                    10.5: '2.625rem',
                    11: '2.75rem',
                    11.5: '2.875rem',
                    12.5: '3.125rem',
                    13: '3.25rem',
                    13.5: '3.375rem',
                    14.5: '3.625rem',
                    15: '3.75rem',
                    15.5: '3.875rem',
                    16: '4rem',
                    16.5: '4.125rem',
                    17: '4.25rem',
                    17.5: '4.375rem',
                    18: '4.5rem',
                    18.5: '4.625rem',
                    19: '4.75rem',
                    19.5: '4.875rem',
                    21: '5.25rem',
                    21.5: '5.375rem',
                    22: '5.5rem',
                    22.5: '5.625rem',
                    23.5: '5.875rem',
                    24.5: '6.125rem',
                    25: '6.25rem',
                    26: '6.5rem',
                    26.5: '6.625rem',
                    27: '6.75rem',
                    27.5: '6.875rem',
                    28: '7rem',
                    29: '7.25rem',
                    30: '7.5rem',
                    33.75: '8.4375rem',
                    34: '8.5rem',
                    35: '8.75rem',
                    36.5: '9.125rem',
                    37: '9.25rem',
                    38: '9.5rem',
                    42: '10.5rem',
                    42.5: '10.625rem',
                    45: '11.25rem',
                    47: '11.75rem',
                    48: '12rem',
                    50: '12.5rem',
                    52: '13rem',
                    73.5: '18.375rem',
                }
            },
            transitionDuration: {
                600: '600ms',
                700: '700ms',
                800: '800ms',
                900: '900ms',
            },
            colors: {
                grey: {
                    DEFAULT: '#333',
                    200: '#B1AEA9',
                    600: '#666',
                    900: '#999'
                },
                red: {
                    DEFAULT: '#E31C21',
                    500: '#f00',
                },
                beige: '#FCF5EB',
                ochre: {
                    DEFAULT: '#FD9B28',
                    500: '#FFA25E'
                },
                green: {
                    800: '#046E52',
                }
            },
            fontFamily: {
                unbounded: ['Unbounded var', 'sans-serif'],
                manrope: ['Manrope var', 'sans-serif'],
                badscript: ['Bad Script', 'sans-serif'],
            },
            lineHeight: {},
            fontSize: {
                'heading-1-pc': ['48px', '140%'],
                'heading-2-pc': ['32px', '140%'],
                'heading-1-mob': ['28px', '140%'],
                'heading-3-pc': ['24px', '140%'],
                'heading-4-pc': ['20px', '140%'],
                'pure-text-pc': ['18px', '175%'],
                'pure-text-base': ['16px', '175%'],
                'sm': ['14px', '175%'],
                'xs': ['12px', '175%'],
            },
            borderRadius: {
                50: '50px',
                60: '60px',
                25: '25px',
            },
            boxShadow: {},
            maxWidth: {
                12: '192px',
                md: '380px',
                tight: '485px',
                small: '620px',
                petite: '780px',
                medium: '940px',
                large: '1100px',
                big: '1100px',
                huge: '1224px',
                wide: '1300px',
            },
            screens: {
                '2xl': '1440px'
            },
            gridTemplateColumns: {
                post: '3fr 1fr',
                'contacts-page': '400px auto'
            },
            gridTemplateRows: {},
            gridAutoRows: {},
            zIndex: {},
        },
    },
    plugins: [
        // require( '@_tw/themejson' )( require( './theme.json' ) ),
    ],
    corePlugins: {
        // preflight: false,
    }
}
