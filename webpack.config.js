var path = require('path');
const extractPlugin = require('extract-text-webpack-plugin');
const ex = new extractPlugin('./style.css');
const autoPrefix = { loader:'postcss-loader',options:{plugins:(loader)=>[require('autoprefixer')()]}};

/*   SASS  */
const config = {
    entry:'./wp-content/themes/enroll-media/js/sass.js',
    output:{
        path: path.resolve('wp-content/themes/enroll-media'),
        filename:'bundle.js'
    },
    module:{
        rules:[
            {
                test:/\.scss$/i,
                use:ex.extract(['css-loader',autoPrefix,'sass-loader'])

            },
        ]
    },
    watch:true,
    plugins:[
        ex
    ]
}

module.exports = config;
