/*
    Copyright (C) 2009 Fabio Alessandro Locati - fabiolocati@gmail.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

#ifndef IS_OPERATIONS_H
#define IS_OPERATIONS_H

namespace is
{
    class operations : public contability
    {
        public:
            operations();

            /*Add will require:
              - Account (uint)
              - Import (double)
              - User (uint)
              - To (uint)
              - Cause (str)
              - Category (uint)
            */
            bool add();

            /*View will require:
              - Account (uint)
              - Since (date)
              - To (date)
            */
            bool view();
    };
}

#endif // IS_OPERATIONS_H
