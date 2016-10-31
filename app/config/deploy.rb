set :application, "koronka"
set :domain,      "koronka.by"
set  :user,       "root"
set  :use_sudo,   false
set :deploy_to,   "/home/harnet/public_html/www"

# Symfony console commands will use this environment for execution
set :symfony_env,  "prod"

# Set this to 2 for the old directory structure
set :symfony_directory_structure, 3
# Set this to 4 if using the older SensioDistributionBundle
set :sensio_distribution_version, 5

# symfony-standard edition directories
set :app_path, "app"
set :web_path, "web"
set :var_path, "var"
set :bin_path, "bin"

# The next 3 settings are lazily evaluated from the above values, so take care
# when modifying them
set :app_config_path, "app/config"
set :log_path, "var/logs"
set :cache_path, "var/cache"

set :symfony_console_path, "bin/console"
set :symfony_console_flags, "--no-debug"

# Remove app_dev.php during deployment, other files in web/ can be specified here
set :controllers_to_clear, ["app_*.php"]

# asset management
set :assets_install_path, "web"
set :assets_install_flags,  '--symlink'

# Share files/directories between releases
set :linked_files, []
set :linked_dirs, ["var/logs"]

# Set correct permissions between releases, this is turned off by default
set :file_permissions_paths, ["var"]
set :permission_method, false

default_run_options[:pty] = true
set :repository, "C:/wamp64/www/harnet.ru/www"
set :deploy_via,  :copy
set :scm, :git

set :model_manager,  "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain                         # This may be the same as your `Web` server
role :db,         domain, :primary => true       # This is where Rails migrations will run

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children, [var_path + "/logs", var_path + "/spool", "vendor", web_path + "/uploads"]
set :writable_dirs, [var_path + "/cache", var_path + "/logs", var_path + "/spool"]


set :use_composer,  true
set :update_vendors, false
set  :keep_releases,  3

 task :upload_parameters do
  origin_file = "app/config/parameters.yml"
  destination_file = shared_path + "/app/config/parameters.yml" # Notice the
  shared_path

  try_sudo "mkdir -p #{File.dirname(destination_file)}"
  top.upload(origin_file, destination_file)
end

after "deploy:setup", "upload_parameters"
#logger.level = Logger::MAX_LEVEL