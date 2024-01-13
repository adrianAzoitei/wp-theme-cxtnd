/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
	theme: {
		extend: {
			spacing: {
				'88': '22rem'
			},
			width: {
				'13vw': '13vw'
			},
		},
		height: {
			'100': '30rem',
			'13vh': '13vh',
			'30vh': '30vh'
		   },
		rotate: {
			 '-90': '-90deg',
			 '0': '0',
			 '45': '45deg',
			 '90': '90deg',
			'30': '30deg',
			 '180': '180deg',
			'270': '270deg',
		   },
		fontFamily: {
			'helvetica': ['Helvetica'],
		  },
		colors: {
			'background': '#FFFFFF',
			'text': '#F1FAEE',
			'link': '#E63946'
			}
	},
  plugins: [],
}

