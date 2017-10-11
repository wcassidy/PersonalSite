module.exports = function(grunt) 
{
	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
        autoprefixer: 
		{
            dist: 
			{
                files: 
				{
                    'newstyle.css': 'style.css'
                }
            }
        }
	});

	grunt.loadNpmTasks('grunt-autoprefixer');

	// Default task(s).
	grunt.registerTask('default', ['autoprefixer']);
};