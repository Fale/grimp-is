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

#include "account.h"
#include <mysql++.h>
#include "../corelib/mysqlData.h"

#ifndef IS_ACCOUNT_CPP
#define IS_ACCOUNT_CPP

namespace is
{
    account::account()
    {
    }

    bool add( std::string name, uint type )
    {
        mysqlpp::Connection conn(false);
        if (conn.connect(db, server, user, pass))
        {
            mysqlpp::Query query = conn.query("");
            if (mysqlpp::StoreQueryResult res = query.store())
                return 1;
            else
                return 0;
        }
    }
}

#endif // IS_ACCOUNT_CPP
