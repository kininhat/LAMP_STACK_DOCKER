FROM memcached:latest
# Use an official Memcached image as the base image

# Set user to memcache (the user already exists in the official image)
USER memcache

# Set the ENTRYPOINT and default command for the container
# -m specifies memory limit in megabytes, and -l specifies listen IP and port
ENTRYPOINT ["memcached"]
CMD ["-l", "0.0.0.0", "-p", "11211", "-m", "1024"]

