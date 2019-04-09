import Cookies from 'js-cookie'

const TokenKey = ''
const UserDataKey = ''
const AuthFlag = ''

export function getToken () {
  return Cookies.get(TokenKey)
}

export function setToken (token) {
  return Cookies.set(TokenKey, token)
}

export function setAuthFlag (flag) {
  return Cookies.set(AuthFlag, flag)
}

export function removeToken () {
  return Cookies.remove(TokenKey)
}

export function getAuthUserName () {
  if (Cookies.getJSON(UserDataKey) !== undefined) {
    return Cookies.getJSON(UserDataKey).name
  }
}

export function getAuthUserId () {
  return Cookies.getJSON(UserDataKey).user_id
}

export function setAuthUser (user) {
  return Cookies.set(UserDataKey, user)
}