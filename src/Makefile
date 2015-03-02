#
##   Pzxing Makefile
#

NAME                =   pzxing


#
##   Php.ini directory
#
INI_DIR             =   /etc/php.d


#
##   The extension dirs
#

EXTENSION_DIR       =   $(shell php-config --extension-dir)


EXTENSION           =   ${NAME}.so
INI                 =   ${NAME}.ini


COMPILER            =   /opt/rh/devtoolset-2/root/usr/bin/g++
LINKER              =   /opt/rh/devtoolset-2/root/usr/bin/g++



COMPILER_FLAGS      =   -Wall -c -O2 -std=c++11 -fpic -I ../deps/zxing-cpp/core/src/ -o
LINKER_FLAGS        =   -shared
LINKER_DEPENDENCIES =   -lphpcpp -L ../deps/zxing-cpp/cpp/build -lzxing


#
##   Command to remove files, copy files and create directories.
#
##   I've never encountered a *nix environment in which these commands do not work.
#   So you can probably leave this as it is
#   #

RM                  =   rm -f
CP                  =   cp -f
MKDIR               =   mkdir -p


#
##   All source files are simply all *.cpp files found in the current directory
#
##   A built-in Makefile macro is used to scan the current directory and find
#   all source files. The object files are all compiled versions of the source
#   #   file, with the .cpp extension being replaced by .o.
#
#
SOURCES             =   $(wildcard *.cpp)
OBJECTS             =   $(SOURCES:%.cpp=%.o)


#
##   From here the build instructions start
#
#
all:                    ${OBJECTS} ${EXTENSION}

${EXTENSION}:		${OBJECTS}
			${LINKER} ${LINKER_FLAGS} -o $@ ${OBJECTS} ${LINKER_DEPENDENCIES}

${OBJECTS}:
			${COMPILER} ${COMPILER_FLAGS} $@ ${@:%.o=%.cpp}

install:
			${CP} ${EXTENSION} ${EXTENSION_DIR}
			${CP} ${INI} ${INI_DIR}

clean:
			${RM} ${EXTENSION} ${OBJECTS}
