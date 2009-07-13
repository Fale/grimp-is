# The name of our project is "IS". CMakeLists files in this project can
# refer to the root source directory of the project as ${IS_SOURCE_DIR} and
# to the root binary directory of the project as ${IS_BINARY_DIR}.

cmake_minimum_required( VERSION 2.6 )
project( IS )

set( BUILD_SHARED_LIBS ON )
set( CMAKE_THREAD_LIBS_INIT )

add_definitions( -g )
#add_definitions( -Wall -O2 )

link_directories ( ${IS_LIBRARY_DIRS} )
include_directories( ${IS_SOURCE_DIR} )

add_subdirectory ( corelib )
